<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasse | HUERTA</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div id="app">
    <!-- Header -->
    <header class="header" role="banner">
        <div class="container header__container">
            <div class="header__logo">
                <h1>
                    <a href="/" title="Zur Startseite">
                        <span aria-hidden="true">🌱</span> HUERTA
                    </a>
                </h1>
            </div>
            <nav class="header__nav" role="navigation" aria-label="Hauptnavigation">
                <ul>
                    <li><a href="/" class="nav-link">Startseite</a></li>
                    <li><a href="/shop" class="nav-link">Shop</a></li>
                    <li>
                        <a href="/cart" class="nav-link cart-link" title="Warenkorb">
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
            <h1>Bestellformular</h1>

            <div id="notification"></div>

            <?php
            // Session starten
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            // Warenkorb prüfen
            if (empty($_SESSION['cart'])) {
                echo '<div class="alert alert--info">';
                echo '<p>Dein Warenkorb ist leer. <a href="/shop">Gehe zum Shop</a></p>';
                echo '</div>';
            } else {
                // Bestellung verarbeiten
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
                    if ($_POST['action'] === 'place_order') {
                        // Validierung
                        $errors = [];

                        $firstname = htmlspecialchars(trim($_POST['firstname'] ?? ''));
                        $lastname = htmlspecialchars(trim($_POST['lastname'] ?? ''));
                        $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
                        $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
                        $address = htmlspecialchars(trim($_POST['address'] ?? ''));
                        $city = htmlspecialchars(trim($_POST['city'] ?? ''));
                        $zip = htmlspecialchars(trim($_POST['zip'] ?? ''));
                        $payment = $_POST['payment'] ?? '';

                        if (empty($firstname)) $errors[] = 'Vorname ist erforderlich';
                        if (empty($lastname)) $errors[] = 'Nachname ist erforderlich';
                        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $errors[] = 'Gültige E-Mail ist erforderlich';
                        }
                        if (empty($address)) $errors[] = 'Adresse ist erforderlich';
                        if (empty($city)) $errors[] = 'Stadt ist erforderlich';
                        if (empty($zip)) $errors[] = 'Postleitzahl ist erforderlich';
                        if (!in_array($payment, ['credit_card', 'paypal', 'bank_transfer'])) {
                            $errors[] = 'Gültige Zahlungsart erforderlich';
                        }

                        if (!empty($errors)) {
                            echo '<div class="alert alert--error">';
                            echo '<strong>Fehler:</strong>';
                            echo '<ul>';
                            foreach ($errors as $error) {
                                echo '<li>' . $error . '</li>';
                            }
                            echo '</ul>';
                            echo '</div>';
                        } else {
                            // Bestellung speichern (simuliert)
                            $order_id = uniqid('ORD-', true);

                            echo '<div class="alert alert--success">';
                            echo '<h3>✅ Bestellung erfolgreich aufgegeben!</h3>';
                            echo '<p>Bestellnummer: <strong>' . $order_id . '</strong></p>';
                            echo '<p>Eine Bestätigungsmail wurde an <strong>' . htmlspecialchars($email) . '</strong> versendet.</p>';
                            echo '</div>';

                            // Warenkorb leeren
                            $_SESSION['cart'] = [];

                            echo '<div style="margin-top: var(--space-xl);">';
                            echo '<a href="/shop" class="btn btn--primary">Zurück zum Shop</a>';
                            echo '<a href="/" class="btn btn--secondary">Zur Startseite</a>';
                            echo '</div>';
                            exit;
                        }
                    }
                }

                // Bestellübersicht & Formular
                echo '<div class="checkout-container">';

                // Bestellübersicht
                echo '<section class="checkout-summary" aria-labelledby="order-summary-title">';
                echo '<h2 id="order-summary-title">Bestellübersicht</h2>';
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
                echo '<span>Versand:</span>';
                echo '<span>' . ($shipping === 0 ? 'Kostenlos' : '€' . number_format($shipping, 2, ',', '.')) . '</span>';
                echo '</div>';
                echo '<div class="cost-row cost-total">';
                echo '<span>Gesamt:</span>';
                echo '<span>€' . number_format($final_total, 2, ',', '.') . '</span>';
                echo '</div>';
                echo '</div>';
                echo '</section>';

                // Bestellformular
                echo '<section class="checkout-form" aria-labelledby="form-title">';
                echo '<h2 id="form-title">Deine Daten</h2>';
                echo '<form method="POST" action="/checkout" class="form">';
                echo '<input type="hidden" name="action" value="place_order">';

                echo '<div class="form-row">';
                echo '<div class="form-group">';
                echo '<label for="firstname">Vorname *</label>';
                echo '<input type="text" id="firstname" name="firstname" required>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="lastname">Nachname *</label>';
                echo '<input type="text" id="lastname" name="lastname" required>';
                echo '</div>';
                echo '</div>';

                echo '<div class="form-group">';
                echo '<label for="email">E-Mail *</label>';
                echo '<input type="email" id="email" name="email" required>';
                echo '</div>';

                echo '<div class="form-group">';
                echo '<label for="phone">Telefon</label>';
                echo '<input type="tel" id="phone" name="phone">';
                echo '</div>';

                echo '<div class="form-group">';
                echo '<label for="address">Adresse *</label>';
                echo '<input type="text" id="address" name="address" placeholder="Straße und Hausnummer" required>';
                echo '</div>';

                echo '<div class="form-row">';
                echo '<div class="form-group">';
                echo '<label for="zip">Postleitzahl *</label>';
                echo '<input type="text" id="zip" name="zip" required>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="city">Stadt *</label>';
                echo '<input type="text" id="city" name="city" required>';
                echo '</div>';
                echo '</div>';

                echo '<fieldset>';
                echo '<legend>Zahlungsart *</legend>';
                echo '<div class="form-group--radio">';
                echo '<label><input type="radio" name="payment" value="credit_card" checked> Kreditkarte</label>';
                echo '</div>';
                echo '<div class="form-group--radio">';
                echo '<label><input type="radio" name="payment" value="paypal"> PayPal</label>';
                echo '</div>';
                echo '<div class="form-group--radio">';
                echo '<label><input type="radio" name="payment" value="bank_transfer"> Banküberweisung</label>';
                echo '</div>';
                echo '</fieldset>';

                echo '<div class="form-actions">';
                echo '<button type="submit" class="btn btn--primary btn--large">Bestellung abschließen</button>';
                echo '<a href="/cart" class="btn btn--secondary">Warenkorb bearbeiten</a>';
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
                <p>&copy; <span id="year"></span> HUERTA. Alle Rechte vorbehalten.</p>
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
