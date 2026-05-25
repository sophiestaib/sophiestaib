/**
 * HUERTA - Main JavaScript
 * Zentrale JS-Funktionalität
 */

document.addEventListener('DOMContentLoaded', function () {
    console.log('🌱 HUERTA lädt...');

    // Initialisiere alle Module
    initializeNavigation();
    initializeTheme();
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
