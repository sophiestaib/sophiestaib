<!DOCTYPE html>
<html lang="de">
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
                    <li><a href="/shop" class="nav-link active" aria-current="page">Shop</a></li>
                    <li><a href="/about" class="nav-link">Über uns</a></li>
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
            <h1>Shop – HUERTA Produkte</h1>
            <p class="lead">Entdecke unsere Kollektion nachhaltiger Produkte für bewusste Ernährung.</p>

            <!-- Benachrichtigungen -->
            <div id="notification"></div>

            <!-- Produkte Grid -->
            <section class="shop-products" aria-labelledby="products-title">
                <h2 id="products-title" class="sr-only">Verfügbare Produkte</h2>
                <div class="grid grid--3">
                    <!-- Produkt: Saisonkalender -->
                    <article class="product-card">
                        <!-- Produktbild -->
                        <div class="product-card__image">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 400'%3E%3Crect fill='%238bc34a' width='300' height='400'/%3E%3Ctext x='150' y='150' font-size='60' fill='white' text-anchor='middle' dominant-baseline='central'%3E%F0%9F%93%85%3C/text%3E%3Ctext x='150' y='250' font-size='24' fill='white' text-anchor='middle'%3EHUERTA%3C/text%3E%3Ctext x='150' y='280' font-size='16' fill='white' text-anchor='middle'%3ESaisonkalender%3C/text%3E%3C/svg%3E"
                                 alt="HUERTA Saisonkalender - Nachhaltiger Wandkalender"
                                 class="product-card__image-img">
                        </div>

                        <!-- Produktinfo -->
                        <div class="product-card__body">
                            <h3>HUERTA Saisonkalender 2026</h3>

                            <p class="product-card__description">
                                Unser hochwertiger Saisonkalender zeigt dir auf einen Blick,
                                welche Obst- und Gemüsesorten gerade Saison haben.
                                Mit schönen Illustrationen, praktischen Tipps und veganen Rezepten.
                            </p>

                            <div class="product-card__features">
                                <ul>
                                    <li>✅ 100% nachhaltiges Papier</li>
                                    <li>✅ DIN A3 Wandkalender</li>
                                    <li>✅ Mit Rezept-Tipps</li>
                                    <li>✅ Deutsche Saisons</li>
                                </ul>
                            </div>

                            <!-- Preis -->
                            <div class="product-card__price">
                                <span class="price" aria-label="Preis: 19,90 Euro">€ 19,90</span>
                            </div>

                            <!-- Add to Cart Button -->
                            <form method="POST" action="/shop" class="add-to-cart-form">
                                <input type="hidden" name="action" value="add_to_cart">
                                <input type="hidden" name="product_id" value="1">
                                <input type="hidden" name="product_name" value="HUERTA Saisonkalender 2026">
                                <input type="hidden" name="product_price" value="19.90">

                                <div class="product-card__quantity">
                                    <label for="qty-1">Menge:</label>
                                    <input type="number" id="qty-1" name="quantity" value="1" min="1" max="10" required>
                                </div>

                                <button type="submit" class="btn btn--accent btn--block">
                                    🛒 In den Warenkorb
                                </button>
                            </form>
                        </div>
                    </article>

                    <!-- Weitere Produkte können hier hinzugefügt werden -->
                </div>
            </section>

            <!-- Info Section -->
            <section class="shop-info mt-3xl" aria-labelledby="info-title">
                <h2 id="info-title">Versand & Zahlungsarten</h2>
                <div class="grid grid--2">
                    <div class="card">
                        <div class="card__body">
                            <h3>📦 Versand</h3>
                            <p>Kostenloser Versand ab € 30. Lieferzeit: 2-4 Werktage innerhalb Deutschlands.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__body">
                            <h3>💳 Zahlungsarten</h3>
                            <p>Wir akzeptieren Kreditkarte, PayPal, Überweisung und Sofortüberweisung.</p>
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
