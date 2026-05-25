<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | HUERTA</title>
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
                    <li><a href="/shop" class="nav-link">Shop</a></li>
                    <li><a href="/about" class="nav-link">About Us</a></li>
                    <li>
                        <a href="/cart" class="nav-link cart-link active" aria-current="page" title="Shopping Cart">
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
            <h1>🛒 Cart</h1>

            <div id="notification"></div>

            <?php
            // Start session
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            // Initialize cart if it doesn't exist
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            // Update Cart Handler
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
                if ($_POST['action'] === 'update_quantity') {
                    $product_id = intval($_POST['product_id']);
                    $quantity = intval($_POST['quantity']);

                    if ($quantity <= 0) {
                        // Remove product if quantity is 0 or negative
                        $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($item) use ($product_id) {
                            return $item['id'] !== $product_id;
                        });
                    } else {
                        // Update quantity
                        foreach ($_SESSION['cart'] as &$item) {
                            if ($item['id'] === $product_id) {
                                $item['quantity'] = $quantity;
                                break;
                            }
                        }
                    }

                    header('Location: /cart');
                    exit;
                }

                if ($_POST['action'] === 'remove_item') {
                    $product_id = intval($_POST['product_id']);
                    $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($item) use ($product_id) {
                        return $item['id'] !== $product_id;
                    });

                    header('Location: /cart');
                    exit;
                }

                if ($_POST['action'] === 'clear_cart') {
                    $_SESSION['cart'] = [];
                    header('Location: /cart');
                    exit;
                }
            }

            // Render cart
            if (empty($_SESSION['cart'])) {
                echo '<div class="cart-empty">';
                echo '<h2>Your cart is empty</h2>';
                echo '<p>There are no products in your cart yet.</p>';
                echo '<a href="/shop" class="btn btn--primary btn--large">Go to Shop</a>';
                echo '</div>';
            } else {
                $total = 0;

                echo '<div class="cart-items">';
                echo '<table class="cart-table" role="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Product</th>';
                echo '<th>Price</th>';
                echo '<th>Quantity</th>';
                echo '<th>Total</th>';
                echo '<th>Action</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                foreach ($_SESSION['cart'] as $item) {
                    $item_total = $item['price'] * $item['quantity'];
                    $total += $item_total;

                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($item['name']) . '</td>';
                    echo '<td>' . number_format($item['price'], 2, ',', '.') . ' €</td>';
                    echo '<td>';
                    echo '<form method="POST" action="/cart" class="quantity-form" style="display: inline;">';
                    echo '<input type="hidden" name="action" value="update_quantity">';
                    echo '<input type="hidden" name="product_id" value="' . $item['id'] . '">';
                    echo '<input type="number" name="quantity" value="' . $item['quantity'] . '" min="1" max="10" class="quantity-input">';
                    echo '<button type="submit" class="btn btn--small">✓</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '<td>' . number_format($item_total, 2, ',', '.') . ' €</td>';
                    echo '<td>';
                    echo '<form method="POST" action="/cart" style="display: inline;">';
                    echo '<input type="hidden" name="action" value="remove_item">';
                    echo '<input type="hidden" name="product_id" value="' . $item['id'] . '">';
                    echo '<button type="submit" class="btn btn--small" title="Remove">🗑️</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
                echo '</div>';

                // Summary
                echo '<div class="cart-summary">';
                echo '<div class="summary-box">';
                echo '<h3>Order Summary</h3>';
                echo '<div class="summary-row">';
                echo '<span>Subtotal:</span>';
                echo '<span>' . number_format($total, 2, ',', '.') . ' €</span>';
                echo '</div>';
                echo '<div class="summary-row">';
                echo '<span>Shipping:</span>';
                echo '<span>' . ($total >= 30 ? 'Free' : '4,99 €') . '</span>';
                echo '</div>';
                echo '<div class="summary-row summary-total">';
                echo '<span>Total:</span>';
                echo '<span>' . number_format($total + ($total >= 30 ? 0 : 4.99), 2, ',', '.') . ' €</span>';
                echo '</div>';
                echo '</div>';

                // Checkout & Continue Shopping
                echo '<div class="cart-actions">';
                echo '<a href="/checkout" class="btn btn--primary btn--large">Go to Checkout ➜</a>';
                echo '<a href="/shop" class="btn btn--secondary">Continue Shopping</a>';
                echo '</div>';

                // Clear Cart Option
                echo '<form method="POST" action="/cart" style="margin-top: var(--space-lg);">';
                echo '<input type="hidden" name="action" value="clear_cart">';
                echo '<button type="submit" class="btn btn--secondary" onclick="return confirm(\'Really clear cart?\');">Clear Cart</button>';
                echo '</form>';

                echo '</div>';
            }
            ?>
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
<script>
    document.getElementById('year').textContent = new Date().getFullYear();
    updateCartCount();
</script>
</body>
</html>
