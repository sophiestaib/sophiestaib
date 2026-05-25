<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | HUERTA</title>
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
                    <li><a href="/shop" class="nav-link">Shop</a></li>
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
            <h1>Order Form</h1>

            <div id="notification"></div>

            <?php
            // Start session
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            // Check cart
            if (empty($_SESSION['cart'])) {
                echo '<div class="alert alert--info">';
                echo '<p>Your cart is empty. <a href="/shop">Go to Shop</a></p>';
                echo '</div>';
            } else {
                // Process order
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
                    if ($_POST['action'] === 'place_order') {
                        // Validation
                        $errors = [];

                        $firstname = htmlspecialchars(trim($_POST['firstname'] ?? ''));
                        $lastname = htmlspecialchars(trim($_POST['lastname'] ?? ''));
                        $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
                        $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
                        $address = htmlspecialchars(trim($_POST['address'] ?? ''));
                        $city = htmlspecialchars(trim($_POST['city'] ?? ''));
                        $zip = htmlspecialchars(trim($_POST['zip'] ?? ''));
                        $payment = $_POST['payment'] ?? '';

                        if (empty($firstname)) $errors[] = 'First name is required';
                        if (empty($lastname)) $errors[] = 'Last name is required';
                        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $errors[] = 'Valid email is required';
                        }
                        if (empty($address)) $errors[] = 'Address is required';
                        if (empty($city)) $errors[] = 'City is required';
                        if (empty($zip)) $errors[] = 'Zip code is required';
                        if (!in_array($payment, ['credit_card', 'paypal', 'bank_transfer'])) {
                            $errors[] = 'Valid payment method required';
                        }

                        if (!empty($errors)) {
                            echo '<div class="alert alert--error">';
                            echo '<strong>Error:</strong>';
                            echo '<ul>';
                            foreach ($errors as $error) {
                                echo '<li>' . $error . '</li>';
                            }
                            echo '</ul>';
                            echo '</div>';
                        } else {
                            // Save order (simulated)
                            $order_id = uniqid('ORD-', true);

                            echo '<div class="alert alert--success">';
                            echo '<h3>✅ Order placed successfully!</h3>';
                            echo '<p>Order Number: <strong>' . $order_id . '</strong></p>';
                            echo '<p>A confirmation email was sent to <strong>' . htmlspecialchars($email) . '</strong>.</p>';
                            echo '</div>';

                            // Clear cart
                            $_SESSION['cart'] = [];

                            echo '<div style="margin-top: var(--space-xl);">';
                            echo '<a href="/shop" class="btn btn--primary">Back to Shop</a>';
                            echo '<a href="/" class="btn btn--secondary">Go to Home</a>';
                            echo '</div>';
                            exit;
                        }
                    }
                }

                // Order overview & Form
                echo '<div class="checkout-container">';

                // Order overview
                echo '<section class="checkout-summary" aria-labelledby="order-summary-title">';
                echo '<h2 id="order-summary-title">Order Summary</h2>';
                echo '<div class="checkout-items">';

                $total = 0;
                foreach ($_SESSION['cart'] as $item) {
                    $item_total = $item['price'] * $item['quantity'];
                    $total += $item_total;

                    echo '<div class="checkout-item">';
                    echo '<div>';
                    echo '<p><strong>' . htmlspecialchars($item['name']) . '</strong></p>';
                    echo '<p class="text-muted">' . $item['quantity'] . '× €' . number_format($item['price'], 2, ',', '.') . '</p>';
                    echo '</div>';
                    echo '<p class="text-right"><strong>€' . number_format($item_total, 2, ',', '.') . '</strong></p>';
                    echo '</div>';
                }

                echo '</div>';

                $shipping = $total >= 30 ? 0 : 4.99;
                $final_total = $total + $shipping;

                echo '<div class="checkout-costs">';
                echo '<div class="cost-row">';
                echo '<span>Subtotal:</span>';
                echo '<span>€' . number_format($total, 2, ',', '.') . '</span>';
                echo '</div>';
                echo '<div class="cost-row">';
                echo '<span>Shipping:</span>';
                echo '<span>' . ($shipping === 0 ? 'Free' : '€' . number_format($shipping, 2, ',', '.')) . '</span>';
                echo '</div>';
                echo '<div class="cost-row cost-total">';
                echo '<span>Total:</span>';
                echo '<span>€' . number_format($final_total, 2, ',', '.') . '</span>';
                echo '</div>';
                echo '</div>';
                echo '</section>';

                // Order form
                echo '<section class="checkout-form" aria-labelledby="form-title">';
                echo '<h2 id="form-title">Your Information</h2>';
                echo '<form method="POST" action="/checkout" class="form">';
                echo '<input type="hidden" name="action" value="place_order">';

                echo '<div class="form-row">';
                echo '<div class="form-group">';
                echo '<label for="firstname">First Name *</label>';
                echo '<input type="text" id="firstname" name="firstname" required>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="lastname">Last Name *</label>';
                echo '<input type="text" id="lastname" name="lastname" required>';
                echo '</div>';
                echo '</div>';

                echo '<div class="form-group">';
                echo '<label for="email">Email *</label>';
                echo '<input type="email" id="email" name="email" required>';
                echo '</div>';

                echo '<div class="form-group">';
                echo '<label for="phone">Phone</label>';
                echo '<input type="tel" id="phone" name="phone">';
                echo '</div>';

                echo '<div class="form-group">';
                echo '<label for="address">Address *</label>';
                echo '<input type="text" id="address" name="address" placeholder="Street and house number" required>';
                echo '</div>';

                echo '<div class="form-row">';
                echo '<div class="form-group">';
                echo '<label for="zip">Zip Code *</label>';
                echo '<input type="text" id="zip" name="zip" required>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="city">City *</label>';
                echo '<input type="text" id="city" name="city" required>';
                echo '</div>';
                echo '</div>';

                echo '<fieldset>';
                echo '<legend>Payment Method *</legend>';
                echo '<div class="form-group--radio">';
                echo '<label><input type="radio" name="payment" value="credit_card" checked> Credit Card</label>';
                echo '</div>';
                echo '<div class="form-group--radio">';
                echo '<label><input type="radio" name="payment" value="paypal"> PayPal</label>';
                echo '</div>';
                echo '<div class="form-group--radio">';
                echo '<label><input type="radio" name="payment" value="bank_transfer"> Bank Transfer</label>';
                echo '</div>';
                echo '</fieldset>';

                echo '<div class="form-actions">';
                echo '<button type="submit" class="btn btn--primary btn--large">Complete Order</button>';
                echo '<a href="/cart" class="btn btn--secondary">Edit Cart</a>';
                echo '</div>';

                echo '</form>';
                echo '</section>';

                echo '</div>';
            }
            ?>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer" role="contentinfo">
        <div class="container">
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
