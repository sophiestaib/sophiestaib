<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | HUERTA</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div id="app">
    <!-- Header -->
    <header class="header" role="banner">
        <div class="container header__container">
            <div class="header__logo">
                <h1>
                    <a href="/" title="Go to home">
                        <span aria-hidden="true">🌱</span> HUERTA
                    </a>
                </h1>
            </div>
            <nav class="header__nav" role="navigation" aria-label="Main navigation">
                <ul>
                    <li><a href="/" class="nav-link">Home</a></li>
                    <li><a href="/seasonal-calendar" class="nav-link">Seasonal Calendar</a></li>
                    <li><a href="/recipes" class="nav-link">Recipes</a></li>
                    <li><a href="/shop" class="nav-link active" aria-current="page">Shop</a></li>
                    <li><a href="/about" class="nav-link">About Us</a></li>
                    <li>
                        <a href="/cart" class="nav-link cart-link" title="Shopping Cart">
                            🛒 <span class="cart-count" id="cart-count">0</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content" id="main-content" role="main">
        <div class="container">
            <h1>Shop – HUERTA Products</h1>
            <p class="lead">Discover our collection of sustainable products for conscious nutrition.</p>

            <!-- Notifications -->
            <div id="notification"></div>

            <!-- Products Grid -->
            <section class="shop-products" aria-labelledby="products-title">
                <h2 id="products-title" class="sr-only">Available Products</h2>
                <div class="grid grid--3">
                    <!-- Product: Seasonal Calendar -->
                    <article class="product-card">
                        <!-- Product Image -->
                        <div class="product-card__image">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 400'%3E%3Crect fill='%238bc34a' width='300' height='400'/%3E%3Ctext x='150' y='150' font-size='60' fill='white' text-anchor='middle' dominant-baseline='central'%3E%F0%9F%93%85%3C/text%3E%3Ctext x='150' y='250' font-size='24' fill='white' text-anchor='middle'%3EHUERTA%3C/text%3E%3Ctext x='150' y='280' font-size='16' fill='white' text-anchor='middle'%3ESeasonal Calendar%3C/text%3E%3C/svg%3E"
                                 alt="HUERTA Seasonal Calendar - Sustainable Wall Calendar"
                                 class="product-card__image-img">
                        </div>

                        <!-- Product Info -->
                        <div class="product-card__body">
                            <h3>HUERTA Seasonal Calendar 2026</h3>

                            <p class="product-card__description">
                                Our high-quality seasonal calendar shows you at a glance
                                which fruits and vegetables are in season.
                                With beautiful illustrations, practical tips, and vegan recipes.
                            </p>

                            <div class="product-card__features">
                                <ul>
                                    <li>✅ 100% sustainable paper</li>
                                    <li>✅ DIN A3 Wall Calendar</li>
                                    <li>✅ With Recipe Tips</li>
                                    <li>✅ Seasonal for Europe</li>
                                </ul>
                            </div>

                            <!-- Price -->
                            <div class="product-card__price">
                                <span class="price" aria-label="Price: 19.90 Euros">€ 19,90</span>
                            </div>

                            <!-- Add to Cart Button -->
                            <form method="POST" action="/shop" class="add-to-cart-form">
                                <input type="hidden" name="action" value="add_to_cart">
                                <input type="hidden" name="product_id" value="1">
                                <input type="hidden" name="product_name" value="HUERTA Seasonal Calendar 2026">
                                <input type="hidden" name="product_price" value="19.90">

                                <div class="product-card__quantity">
                                    <label for="qty-1">Quantity:</label>
                                    <input type="number" id="qty-1" name="quantity" value="1" min="1" max="10" required>
                                </div>

                                <button type="submit" class="btn btn--accent btn--block">
                                    🛒 Add to Cart
                                </button>
                            </form>
                        </div>
                    </article>

                    <!-- More products can be added here -->
                </div>
            </section>

            <!-- Info Section -->
            <section class="shop-info mt-3xl" aria-labelledby="info-title">
                <h2 id="info-title">Shipping & Payment Methods</h2>
                <div class="grid grid--2">
                    <div class="card">
                        <div class="card__body">
                            <h3>📦 Shipping</h3>
                            <p>Free shipping from € 30. Delivery time: 2-4 business days within Europe.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__body">
                            <h3>💳 Payment Methods</h3>
                            <p>We accept credit card, PayPal, bank transfer, and instant transfer.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="footer__content">
                <div class="footer__section">
                    <h3>HUERTA</h3>
                    <p>Sustainable, seasonal, and vegan nutrition for a harmonious life with nature.</p>
                </div>
                <nav class="footer__section" aria-label="Footer Navigation">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/seasonal-calendar">Seasonal Calendar</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/about">About Us</a></li>
                    </ul>
                </nav>
                <nav class="footer__section" aria-label="Legal Links">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/impressum">Legal Info</a></li>
                        <li><a href="/privacy">Privacy</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__bottom">
                <p>&copy; <span id="year"></span> HUERTA. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>

<script src="/assets/js/main.js"></script>
<script src="/assets/js/shop.js"></script>
<script>
    document.getElementById('year').textContent = new Date().getFullYear();
    updateCartCount();
</script>
</body>
</html>

<?php
/**
 * PHP-Logik für Shop & Warenkorb
 */

// Session starten
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Warenkorb initialisieren falls nicht vorhanden
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add to Cart Handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'add_to_cart') {
        $product_id = intval($_POST['product_id']);
        $product_name = htmlspecialchars($_POST['product_name']);
        $product_price = floatval($_POST['product_price']);
        $quantity = intval($_POST['quantity']);

        // Prüfe ob Produkt bereits im Warenkorb
        $product_exists = false;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] === $product_id) {
                $item['quantity'] += $quantity;
                $product_exists = true;
                break;
            }
        }

        // Wenn nicht, füge neues Produkt hinzu
        if (!$product_exists) {
            $_SESSION['cart'][] = [
                    'id' => $product_id,
                    'name' => $product_name,
                    'price' => $product_price,
                    'quantity' => $quantity
            ];
        }

        // Redirect zum Vermeiden von POST-Resubmit
        header('Location: /shop?added=true');
        exit;
    }
}

// Benachrichtigung anzeigen wenn Produkt hinzugefügt
if (isset($_GET['added']) && $_GET['added'] === 'true') {
    echo "<script>
        showNotification('✅ Produkt zum Warenkorb hinzugefügt!', 'success');
        // URL bereinigen
        window.history.replaceState({}, document.title, '/shop');
    </script>";
}
?>
