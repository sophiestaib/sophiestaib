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

            // Formulardaten sammeln
            const formData = new FormData(this);
            const productName = formData.get('product_name');
            const quantity = formData.get('quantity');

            // Form abschicken (normaler POST)
            this.submit();
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

console.log('✅ Shop-Modul geladen');
