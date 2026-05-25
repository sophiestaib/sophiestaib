// Client-side cart implementation using localStorage
(function () {
    const STORAGE_KEY = 'huerta_cart_v1';

    function getCart() {
        try {
            return JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]');
        } catch (e) {
            return [];
        }
    }

    function saveCart(cart) {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(cart));
    }

    function formatPrice(price) {
        return new Intl.NumberFormat('de-DE', {style: 'currency', currency: 'EUR'}).format(price);
    }

    function updateCartCount() {
        const cart = getCart();
        const count = cart.reduce((s, i) => s + (i.quantity || 0), 0);
        const el = document.getElementById('cart-count');
        if (el) el.textContent = String(count);
    }

    function addItem(item) {
        const cart = getCart();
        const id = String(item.id || item.product_id || item.productId);
        const price = parseFloat(item.price || item.product_price || item.productPrice) || 0;
        const name = item.name || item.product_name || item.productName || 'Product';
        const qty = parseInt(item.quantity || item.qty || 1, 10) || 1;

        const existing = cart.find(i => String(i.id) === id);
        if (existing) {
            existing.quantity = Math.min(10, existing.quantity + qty);
        } else {
            cart.push({id, name, price, quantity: qty});
        }

        saveCart(cart);
        updateCartCount();
        if (typeof showNotification === 'function') showNotification('✅ Product added to cart', 'success');
    }

    function removeItem(id) {
        let cart = getCart();
        cart = cart.filter(i => String(i.id) !== String(id));
        saveCart(cart);
        updateCartCount();
        renderCart();
    }

    function updateQuantity(id, quantity) {
        const cart = getCart();
        const item = cart.find(i => String(i.id) === String(id));
        if (item) {
            item.quantity = Math.max(0, Math.min(10, parseInt(quantity, 10) || 0));
            if (item.quantity === 0) {
                removeItem(id);
                return;
            }
            saveCart(cart);
            updateCartCount();
            renderCart();
        }
    }

    function renderCart() {
        const container = document.getElementById('cart-content');
        if (!container) return;
        const cart = getCart();

        if (!cart.length) {
            container.innerHTML = `
                <div class="cart-empty">
                    <h2>Your cart is empty</h2>
                    <p>There are no products in your cart yet.</p>
                    <a href="shop.html" class="btn btn--primary btn--large">Go to Shop</a>
                </div>`;
            return;
        }

        let total = 0;
        let rows = '';
        cart.forEach(item => {
            const lineTotal = item.price * item.quantity;
            total += lineTotal;
            rows += `
                <tr>
                    <td>${escapeHtml(item.name)}</td>
                    <td>${formatPrice(item.price)}</td>
                    <td>
                        <input type="number" class="quantity-input" data-product-id="${escapeHtml(item.id)}" value="${item.quantity}" min="1" max="10">
                    </td>
                    <td>${formatPrice(lineTotal)}</td>
                    <td>
                        <button class="btn btn--small remove-item" data-product-id="${escapeHtml(item.id)}">🗑️</button>
                    </td>
                </tr>`;
        });

        const shipping = total >= 30 ? 0 : 4.99;
        const finalTotal = total + shipping;

        container.innerHTML = `
            <div class="cart-items">
                <table class="cart-table" role="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${rows}
                    </tbody>
                </table>
            </div>
            <div class="cart-summary">
                <div class="summary-box">
                    <h3>Order Summary</h3>
                    <div class="summary-row"><span>Subtotal:</span><span>${formatPrice(total)}</span></div>
                    <div class="summary-row"><span>Shipping:</span><span>${shipping === 0 ? 'Free' : formatPrice(shipping)}</span></div>
                    <div class="summary-row summary-total"><span>Total:</span><span>${formatPrice(finalTotal)}</span></div>
                </div>
                <div class="cart-actions">
                    <a href="checkout.php" class="btn btn--primary btn--large">Proceed to Checkout ➜</a>
                    <a href="shop.html" class="btn btn--secondary">Continue Shopping</a>
                </div>
            </div>`;

        // Attach event handlers
        container.querySelectorAll('.remove-item').forEach(btn => {
            btn.addEventListener('click', function () {
                const id = this.getAttribute('data-product-id');
                removeItem(id);
            });
        });

        container.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('change', function () {
                const id = this.getAttribute('data-product-id');
                let q = parseInt(this.value, 10) || 1;
                if (q < 1) q = 1;
                if (q > 10) q = 10;
                this.value = q;
                updateQuantity(id, q);
            });
        });
    }

    function escapeHtml(str) {
        return String(str)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }

    // expose global functions
    window.huertaCart = {
        addItem,
        renderCart,
        updateCartCount,
        getCart
    };

    // auto-update count on load
    document.addEventListener('DOMContentLoaded', updateCartCount);
})();
