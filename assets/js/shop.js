/**
 * HUERTA Shop - JavaScript
 * Warenkorb-Funktionalität & Benutzerinteraktionen
 */

/**
 * Warenkorb-Anzahl aktualisieren
 */
function updateCartCount() {
    try {
        // Versuche Cart-Count aus LocalStorage zu laden (wird vom Server gesetzt)
        fetch('/api/cart-count')
            .then(response => response.json())
            .then(data => {
                const cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    cartCountElement.textContent = data.count || '0';
                }
            })
            .catch(() => {
                // Fallback: 0 anzeigen
                const cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    cartCountElement.textContent = '0';
                }
            });
    } catch (e) {
        console.log('Cart count update nicht verfügbar');
    }
}

/**
 * Add-to-Cart Form Handler
 */
document.addEventListener('DOMContentLoaded', function () {
    const addToCartForms = document.querySelectorAll('.add-to-cart-form');

    addToCartForms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Collect form data
            const formData = new FormData(this);
            const productId = formData.get('product_id') || this.dataset.productId;
            const productName = formData.get('product_name') || this.dataset.productName;
            const productPrice = parseFloat(formData.get('product_price') || this.dataset.productPrice) || 0;
            const quantity = parseInt(formData.get('quantity') || 1, 10) || 1;

            // If client-side cart is available, add item there
            if (window.huertaCart && typeof window.huertaCart.addItem === 'function') {
                window.huertaCart.addItem({
                    id: productId,
                    name: productName,
                    price: productPrice,
                    quantity: quantity
                });
                // Optionally render cart if on cart page
                if (window.location.pathname.endsWith('/cart.php') && typeof window.huertaCart.renderCart === 'function') {
                    window.huertaCart.renderCart();
                }
            } else {
                // Fallback: submit the form to server
                this.submit();
            }
        });
    });

    // Quantity-Input validieren
    const quantityInputs = document.querySelectorAll('input[type="number"][name="quantity"]');
    quantityInputs.forEach(input => {
        input.addEventListener('change', function () {
            if (this.value < 1) this.value = 1;
            if (this.value > 10) this.value = 10;
        });
    });
});

/**
 * Notification anzeigen
 */
function showNotification(message, type = 'info', duration = 3000) {
    const notificationContainer = document.getElementById('notification');
    if (!notificationContainer) return;

    const notification = document.createElement('div');
    notification.className = `alert alert--${type}`;
    notification.textContent = message;
    notification.style.marginBottom = 'var(--space-lg)';

    notificationContainer.appendChild(notification);

    setTimeout(() => {
        notification.remove();
    }, duration);
}

/**
 * Format Preis
 */
function formatPrice(price) {
    return new Intl.NumberFormat('de-DE', {
        style: 'currency',
        currency: 'EUR'
    }).format(price);
}


// Simple carousel initialization for product carousels
function initProductCarousels() {
    document.querySelectorAll('.product-carousel').forEach(function (carousel) {
        const track = carousel.querySelector('.carousel-track');
        const slides = Array.from(carousel.querySelectorAll('.carousel-slide'));
        const prev = carousel.querySelector('.carousel-prev');
        const next = carousel.querySelector('.carousel-next');
        const dotsContainer = carousel.querySelector('.carousel-dots');
        let index = 0;

        function goTo(i) {
            index = (i + slides.length) % slides.length;
            const offset = -index * 100;
            track.style.transform = 'translateX(' + offset + '%)';
            // update dots
            Array.from(dotsContainer.children).forEach((d, idx) => d.classList.toggle('is-active', idx === index));
        }

        // create dots
        slides.forEach((s, i) => {
            const btn = document.createElement('button');
            btn.className = 'carousel-dot';
            btn.type = 'button';
            btn.setAttribute('aria-label', 'Go to slide ' + (i + 1));
            btn.addEventListener('click', () => goTo(i));
            dotsContainer.appendChild(btn);
        });

        prev.addEventListener('click', () => goTo(index - 1));
        next.addEventListener('click', () => goTo(index + 1));

        // keyboard support
        carousel.addEventListener('keydown', function (e) {
            if (e.key === 'ArrowLeft') prev.click();
            if (e.key === 'ArrowRight') next.click();
        });

        // autoplayer (optional)
        let autoplay = true;
        let interval = 5000;
        if (autoplay) {
            let timer = setInterval(() => goTo(index + 1), interval);
            carousel.addEventListener('mouseenter', () => clearInterval(timer));
            carousel.addEventListener('mouseleave', () => timer = setInterval(() => goTo(index + 1), interval));
        }

        // set initial
        goTo(0);
    });
}

initProductCarousels();
console.log('✅ Shop-Modul geladen');
