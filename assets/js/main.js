/**
 * HUERTA - Main JavaScript
 * Zentrale JS-Funktionalität
 */

document.addEventListener('DOMContentLoaded', function () {
    console.log('🌱 HUERTA lädt...');

    // Initialisiere alle Module
    initializeNavigation();
    initializeTheme();
    // Background accents generator for scrolling pages
    initializeBackgroundAccents();
    // Initialize homepage slideshow if present
    if(typeof initializeSlideshow === 'function') initializeSlideshow();
    // Parallax is optional and auto-inits if body has class 'parallax-enabled'
    if (document.body.classList.contains('parallax-enabled')) initializeParallax();
});



/**
 * Navigation-Funktionalität
 */
function initializeNavigation() {
    const nav = document.querySelector('.header__nav');
    if (!nav) return;

    // Aktive Seite highlighten (aria-current-Page)
    const currentPath = window.location.pathname;
    const links = nav.querySelectorAll('a');

    links.forEach(link => {
        if (link.getAttribute('aria-current') === 'page') {
            link.style.borderBottom = '2px solid var(--color-accent)';
        }
    });
}

/**
 * Theme/Design-Funktionalität
 */
function initializeTheme() {
    // Speichere Theme-Präferenz
    const theme = localStorage.getItem('huerta-theme') || 'light';
    applyTheme(theme);
}

function applyTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
    localStorage.setItem('huerta-theme', theme);
}

/**
 * API-Helper
 */
async function apiCall(endpoint, options = {}) {
    const defaultOptions = {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        }
    };

    const response = await fetch(`/api/${endpoint}`, {
        ...defaultOptions,
        ...options
    });

    if (!response.ok) {
        throw new Error(`API-Fehler: ${response.statusText}`);
    }

    return response.json();
}

/**
 * Utility: Zeige Alert/Toast Benachrichtigung
 */
function showNotification(message, type = 'info', duration = 3000) {
    // Versuche zunächst das Benachrichtigungs-Container-Element zu finden
    let notification = document.getElementById('notification');

    if (!notification) {
        // Fallback: Floating Notification
        notification = document.createElement('div');
        notification.style.position = 'fixed';
        notification.style.top = '80px';
        notification.style.right = '20px';
        notification.style.maxWidth = '400px';
        notification.style.zIndex = '9999';
        document.body.appendChild(notification);
    }

    const notificationElement = document.createElement('div');
    notificationElement.className = `alert alert--${type}`;
    notificationElement.textContent = message;

    if (notification.id === 'notification') {
        notificationElement.style.marginBottom = 'var(--space-lg)';
    } else {
        notificationElement.style.marginBottom = 'var(--space-lg)';
    }

    notification.appendChild(notificationElement);

    setTimeout(() => {
        notificationElement.remove();
    }, duration);
}

/**
 * Utility: Formatiere Datum
 */
function formatDate(date) {
    return new Date(date).toLocaleDateString('de-DE', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

/**
 * Utility: Formatiere Preis
 */
function formatPrice(price) {
    return new Intl.NumberFormat('de-DE', {
        style: 'currency',
        currency: 'EUR'
    }).format(price);
}

/**
 * Aktualisiere Warenkorb-Anzahl
 */
function updateCartCount() {
    try {
        fetch('/api/cart-count')
            .then(response => response.json())
            .then(data => {
                const cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    cartCountElement.textContent = data.count || '0';
                }
            })
            .catch(() => {
                const cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    cartCountElement.textContent = '0';
                }
            });
    } catch (e) {
        console.log('Cart count update nicht verfügbar');
    }
}

console.log('✅ HUERTA ist bereit!');

/* Parallax (optional): enable by adding class "parallax-enabled" to <body> */
function initializeParallax(){
  if(!('requestAnimationFrame' in window)) return;
  const container = document.querySelector('.background-accents');
  if(!container) return;
  const accents = Array.from(container.querySelectorAll('.accent'));
  // small initial random offsets
  accents.forEach(el => el.dataset._offset = (Math.random()*40 - 20).toString());

  let lastScroll = window.scrollY;
  let ticking = false;

  function update(){
    const sc = window.scrollY;
    accents.forEach(el=>{
      const speed = parseFloat(el.dataset.speed) || parseFloat(getComputedStyle(el).getPropertyValue('--speed')) || 1;
      const prev = parseFloat(el.dataset._offset || 0);
      const next = prev + (sc - lastScroll) * (speed * 0.08);
      el.dataset._offset = next;
      // when parallax enabled, disable float animation
      if(document.body.classList.contains('parallax-enabled')){
        el.style.animation = 'none';
      }
      el.style.transform = `translate(-50%,-50%) translateY(${next}px)`;
    });
    lastScroll = sc;
    ticking = false;
  }

  window.addEventListener('scroll', function(){ if(!ticking){ requestAnimationFrame(update); ticking=true; } }, { passive:true });
}

// Auto-init if body has class 'parallax-enabled'
if(document.body.classList.contains('parallax-enabled')){
  initializeParallax();
}

/* Generate a grid of non-overlapping accents inside .main-content */
function initializeBackgroundAccents(){
  const main = document.querySelector('.main-content');
  if(!main) return;

  // remove previous container if exists
  let container = main.querySelector('.background-accents');
  if(container) container.remove();

  container = document.createElement('div');
  container.className = 'background-accents';
  // make container cover full scroll height of main (so it doesn't reach footer)
  container.style.position = 'absolute';
  container.style.top = '0';
  container.style.left = '0';
  container.style.width = '100%';
  container.style.zIndex = '0';
  container.style.pointerEvents = 'none';
  main.insertBefore(container, main.firstChild);

  // derive assets base from this script path so paths work from any page depth
  const scriptEl = document.querySelector('script[src$="main.js"]') || document.currentScript;
  const scriptSrc = (scriptEl && scriptEl.src) ? scriptEl.src : (window.location.origin + '/assets/js/main.js');
  const assetsBase = scriptSrc.replace(/\/assets\/js\/[^/]+$/, '/assets/').replace(/\/assets\/js\//, '/assets/');
  const imgBase = assetsBase + 'img/';

  const files = [
    {name:'beet', file:'beet_root.png'},
    {name:'broccoli', file:'broccoli.png'},
    {name:'carrot', file:'carrot.png'},
    {name:'kiwi', file:'kiwi.png'},
    {name:'orange', file:'orange.png'},
    {name:'orange-y', file:'orange_yellow.png'},
    {name:'peach', file:'peach.png'},
    {name:'tomato', file:'tomato.png'}
  ];

  const containerWidth = main.clientWidth;
  const containerHeight = main.scrollHeight || main.clientHeight;
  const cellSize = 240; // px cell height to avoid overlap
  const columns = Math.max(2, Math.floor(containerWidth / cellSize));
  const rows = Math.max(1, Math.ceil(containerHeight / cellSize));

  let count = 0;
  for(let r=0; r<rows; r++){
    for(let c=0; c<columns; c++){
      const idx = count % files.length;
      const f = files[idx];
      const el = document.createElement('div');
      // use CSS classes for per-image background so paths stay in CSS; also set class here
      el.className = 'accent accent--' + f.name;

      // Calculate center of the grid cell
      const leftPercent = ((c + 0.5) * (100 / columns));
      const topPx = (r + 0.5) * cellSize;
      const topPercent = (topPx / containerHeight) * 100;

      // Small jitter but constrained so elements stay inside their cell
      const jitterX = ((Math.random() * 2 - 1) * (100 / columns) * 0.08);
      const jitterY = ((Math.random() * 2 - 1) * (100 / rows) * 0.04);

      el.style.left = (leftPercent + jitterX) + '%';
      el.style.top = Math.min(98, Math.max(2, topPercent + jitterY)) + '%';

      const sizeVw = Math.max(6, Math.min(14, 10 + ((r + c) % 3 - 1) * 2));
      el.style.setProperty('--size', sizeVw + 'vw');

      // provide per-accent speed via inline CSS variable (CSS uses --speed)
      const speed = (0.9 + (idx % 3) * 0.08);
      el.style.setProperty('--speed', speed);

      container.appendChild(el);
      count++;
    }
  }

  // ensure container height matches main content so accents stop before footer
  container.style.height = main.scrollHeight + 'px';

  // regenerate on resize (debounced)
  let resizeTimer = null;
  window.addEventListener('resize', ()=>{
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(()=> initializeBackgroundAccents(), 300);
  });

  // observe DOM changes in main and re-init mildly when structure changes
  try{
    if(window.__huertaAccentsObserver) window.__huertaAccentsObserver.disconnect();
    const mo = new MutationObserver(()=>{
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(()=> initializeBackgroundAccents(), 400);
    });
    mo.observe(main, { childList:true, subtree:true });
    window.__huertaAccentsObserver = mo;
  }catch(e){ /* ignore if MutationObserver not available */ }
}

window.addEventListener('load', initializeBackgroundAccents);

/* Simple slideshow initializer (homepage) */
function initializeSlideshow(){
  const slideshow = document.getElementById('homepage-slideshow');
  if(!slideshow) return;
  const slides = Array.from(slideshow.querySelectorAll('.slide'));
  if(slides.length <= 1) return;
  let idx = slides.findIndex(s=>s.classList.contains('active'));
  if(idx < 0) idx = 0;
  function show(i){ slides.forEach((s,n)=> s.classList.toggle('active', n===i)); }
  let timer = setInterval(()=>{ idx = (idx + 1) % slides.length; show(idx); }, 3000);
  slideshow.addEventListener('mouseenter', ()=> clearInterval(timer));
  slideshow.addEventListener('mouseleave', ()=> { clearInterval(timer); timer = setInterval(()=>{ idx = (idx + 1) % slides.length; show(idx); }, 3000); });
}
