<?php
// Simple checkout handler that saves posted order data to data/orders.json
if (session_status() === PHP_SESSION_NONE) session_start();

// ensure data dir exists
$dataDir = __DIR__ . '/../data';
if (!is_dir($dataDir)) mkdir($dataDir, 0755, true);
$ordersFile = $dataDir . '/orders.json';

$saved = false;
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = [];
    $fields = ['firstname', 'lastname', 'email', 'phone', 'address', 'city', 'zip', 'payment'];
    foreach ($fields as $f) {
        $input[$f] = trim($_POST[$f] ?? '');
    }

    if ($input['firstname'] === '') $errors[] = 'First name is required';
    if ($input['lastname'] === '') $errors[] = 'Last name is required';
    if (!filter_var($input['email'], FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email required';

    if (empty($errors)) {
        $order = [
            'id' => uniqid('ORD-', true),
            'timestamp' => date(DATE_ATOM),
            'customer' => $input,
            'cart' => json_decode($_POST['cart_json'] ?? '[]', true) ?: []
        ];

        $all = [];
        if (file_exists($ordersFile)) {
            $content = file_get_contents($ordersFile);
            $all = json_decode($content, true) ?: [];
        }
        $all[] = $order;
        file_put_contents($ordersFile, json_encode($all, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        $saved = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout | HUERTA</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div id="app">
    <header class="header" role="banner">
        <div class="container header__container">
            <div class="header__logo"><h1><a href="../index.php"><img src="../assets/img/Asset%2016.png" width="80"
                                                                       alt="HUERTA logo"></a></h1></div>
            <nav class="header__nav" role="navigation" aria-label="Main navigation">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="recipes.php">Recipes</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="cart.php">Cart</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content" id="main-content" role="main">
        <div class="container">
            <h1>Checkout</h1>
            <?php if ($saved): ?>
                <div class="alert alert--success">✅ Order saved. Order ID:
                    <strong><?= htmlspecialchars($order['id']) ?></strong></div>
                <p><a href="../index.php" class="btn btn--primary">Return to Home</a></p>
            <?php else: ?>
                <?php if ($errors): ?>
                    <div class="alert alert--error"><strong>Errors:</strong>
                        <ul><?php foreach ($errors as $e) echo '<li>' . htmlspecialchars($e) . '</li>'; ?></ul>
                    </div>
                <?php endif; ?>

                <form method="POST" action="" id="checkout-form">
                    <input type="hidden" name="cart_json" id="cart_json">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstname">First Name *</label>
                            <input id="firstname" name="firstname" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name *</label>
                            <input id="lastname" name="lastname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input id="email" name="email" type="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="address">Address *</label>
                        <input id="address" name="address" required placeholder="Street and house number">
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label for="zip">Zip Code *</label><input id="zip" name="zip" required>
                        </div>
                        <div class="form-group"><label for="city">City *</label><input id="city" name="city" required>
                        </div>
                    </div>
                    <fieldset>
                        <legend>Payment Method *</legend>
                        <div class="form-group--radio"><label><input type="radio" name="payment" value="credit_card"
                                                                     checked> Credit Card</label></div>
                        <div class="form-group--radio"><label><input type="radio" name="payment" value="paypal"> PayPal</label>
                        </div>
                        <div class="form-group--radio"><label><input type="radio" name="payment" value="bank_transfer">
                                Bank Transfer</label></div>
                    </fieldset>
                    <div class="form-actions">
                        <button type="submit" class="btn btn--primary btn--large">Complete Order</button>
                        <a href="cart.html" class="btn btn--secondary">Edit Cart</a>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </main>

    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="footer__content">
                <div class="footer__section"><h3>HUERTA</h3>
                    <p>Sustainable, seasonal, and vegan nutrition for a life in harmony with nature.</p></div>
                <nav class="footer__section" aria-label="Footer navigation"><h3>Navigation</h3>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="recipes.php">Recipes</a></li>
                        <li><a href="shop.php">Shop</a></li>
                    </ul>
                </nav>
                <nav class="footer__section" aria-label="Legal links"><h3>Legal</h3>
                    <ul>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="privacy.php">Privacy</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__bottom"><p>&copy; <span id="year"></span> HUERTA. All rights reserved.</p></div>
        </div>
    </footer>
</div>

<script src="../../../../version01_huerta_website/untitled/assets/js/main.js"></script>
<script src="../assets/js/cart.js"></script>
<script>
    document.getElementById('year').textContent = new Date().getFullYear();
    if (window.huertaCart) huertaCart.updateCartCount();

    // Pre-fill cart JSON into form on submit
    document.getElementById('checkout-form')?.addEventListener('submit', function (e) {
        var cart = [];
        if (window.huertaCart && typeof window.huertaCart.getCart === 'function') cart = window.huertaCart.getCart();
        document.getElementById('cart_json').value = JSON.stringify(cart);
    });
</script>
</body>
</html>
