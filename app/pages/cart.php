<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warenkorb | HUERTA</title>
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
                    <li><a href="/seasonal-calendar" class="nav-link">Saisonkalender</a></li>
                    <li><a href="/recipes" class="nav-link">Rezepte</a></li>
                    <li><a href="/shop" class="nav-link">Shop</a></li>
                    <li><a href="/about" class="nav-link">Über uns</a></li>
                    <li>
                        <a href="/cart" class="nav-link cart-link active" aria-current="page" title="Warenkorb">
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
            <h1>🛒 Warenkorb</h1>

            <div id="notification"></div>

            <?php
            // Session starten
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            // Warenkorb initialisieren falls nicht vorhanden
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            // Update Cart Handler
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
                if ($_POST['action'] === 'update_quantity') {
                    $product_id = intval($_POST['product_id']);
                    $quantity = intval($_POST['quantity']);

                    if ($quantity <= 0) {
                        // Entferne Produkt wenn Menge 0 oder negativ
                        $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($item) use ($product_id) {
                            return $item['id'] !== $product_id;
                        });
                    } else {
                        // Update Menge
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

            // Warenkorb rendern
            if (empty($_SESSION['cart'])) {
                echo '<div class="cart-empty">';
                echo '<h2>Dein Warenkorb ist leer</h2>';
                echo '<p>Es befinden sich noch keine Produkte in deinem Warenkorb.</p>';
                echo '<a href="/shop" class="btn btn--primary btn--large">Zum Shop</a>';
                echo '</div>';
            } else {
                $total = 0;

                echo '<div class="cart-items">';
                echo '<table class="cart-table" role="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Produkt</th>';
                echo '<th>Preis</th>';
                echo '<th>Menge</th>';
                echo '<th>Summe</th>';
                echo '<th>Aktion</th>';
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
                    echo '<button type="submit" class="btn btn--small" title="Entfernen">🗑️</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
                echo '</div>';

                // Zusammenfassung
                echo '<div class="cart-summary">';
                echo '<div class="summary-box">';
                echo '<h3>Bestellsummary</h3>';
                echo '<div class="summary-row">';
                echo '<span>Subtotal:</span>';
                echo '<span>' . number_format($total, 2, ',', '.') . ' €</span>';
                echo '</div>';
                echo '<div class="summary-row">';
                echo '<span>Versand:</span>';
                echo '<span>' . ($total >= 30 ? 'Kostenlos' : '4,99 €') . '</span>';
                echo '</div>';
                echo '<div class="summary-row summary-total">';
                echo '<span>Gesamt:</span>';
                echo '<span>' . number_format($total + ($total >= 30 ? 0 : 4.99), 2, ',', '.') . ' €</span>';
                echo '</div>';
                echo '</div>';

                // Checkout & Continue Shopping
                echo '<div class="cart-actions">';
                echo '<a href="/checkout" class="btn btn--primary btn--large">Zur Kasse ➜</a>';
                echo '<a href="/shop" class="btn btn--secondary">Weiter einkaufen</a>';
                echo '</div>';

                // Clear Cart Option
                echo '<form method="POST" action="/cart" style="margin-top: var(--space-lg);">';
                echo '<input type="hidden" name="action" value="clear_cart">';
                echo '<button type="submit" class="btn btn--secondary" onclick="return confirm(\'Warenkorb wirklich leeren?\');">Warenkorb leeren</button>';
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
                    <p>Nachhaltige, saisonale und vegane Ernährung für ein harmonisches Leben mit der Natur.</p>
                </div>
                <nav class="footer__section" aria-label="Footer Navigation">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="/">Startseite</a></li>
                        <li><a href="/seasonal-calendar">Saisonkalender</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/about">Über uns</a></li>
                    </ul>
                </nav>
                <nav class="footer__section" aria-label="Rechtliche Links">
                    <h3>Rechtliches</h3>
                    <ul>
                        <li><a href="/contact">Kontakt</a></li>
                        <li><a href="/impressum">Impressum</a></li>
                        <li><a href="/privacy">Datenschutz</a></li>
                    </ul>
                </nav>
            </div>
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
