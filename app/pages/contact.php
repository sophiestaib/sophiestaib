<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | HUERTA</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div id="app">
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
                        <a href="/cart" class="nav-link cart-link" title="Warenkorb">
                            🛒 <span class="cart-count" id="cart-count">0</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content" id="main-content" role="main">
        <div class="container">
            <h1>Kontakt</h1>
            <p class="lead">Hast du Fragen oder Feedback? Wir freuen uns, von dir zu hören!</p>

            <div class="grid grid--2" style="gap: var(--space-2xl);">
                <!-- Kontaktform -->
                <section class="contact-form" aria-labelledby="contact-form-title">
                    <h2 id="contact-form-title">Schreib uns eine Nachricht</h2>

                    <div id="notification"></div>

                    <form method="POST" action="/contact" class="form">
                        <input type="hidden" name="action" value="send_message">

                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-Mail *</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="subject">Betreff *</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Nachricht *</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>

                        <div class="form-group--checkbox" style="margin-bottom: var(--space-lg);">
                            <label>
                                <input type="checkbox" name="newsletter" value="1">
                                Ich möchte HUERTA-Updates erhalten
                            </label>
                        </div>

                        <button type="submit" class="btn btn--primary btn--large">Nachricht senden</button>
                    </form>
                </section>

                <!-- Kontaktinformationen -->
                <section class="contact-info" aria-labelledby="contact-info-title">
                    <h2 id="contact-info-title">Kontaktinformationen</h2>

                    <div class="contact-item" style="margin-bottom: var(--space-xl);">
                        <h3>📍 Adresse</h3>
                        <p>
                            HUERTA<br>
                            Musterfirma<br>
                            Musterstraße 123<br>
                            12345 Musterstadt<br>
                            Deutschland
                        </p>
                    </div>

                    <div class="contact-item" style="margin-bottom: var(--space-xl);">
                        <h3>📧 E-Mail</h3>
                        <p>
                            <a href="mailto:info@huerta-example.de">info@huerta-example.de</a><br>
                            <a href="mailto:support@huerta-example.de">support@huerta-example.de</a>
                        </p>
                    </div>

                    <div class="contact-item" style="margin-bottom: var(--space-xl);">
                        <h3>📞 Telefon</h3>
                        <p>
                            <a href="tel:+49123456789">+49 (0) 123 456789</a>
                        </p>
                    </div>

                    <div class="contact-item" style="margin-bottom: var(--space-xl);">
                        <h3>🕐 Öffnungszeiten</h3>
                        <p>
                            Mo – Fr: 09:00 – 18:00<br>
                            Sa: 10:00 – 16:00<br>
                            So: Geschlossen
                        </p>
                    </div>

                    <div class="contact-item">
                        <h3>🌐 Social Media</h3>
                        <p>
                            <a href="#" title="Instagram">Instagram</a> •
                            <a href="#" title="Facebook">Facebook</a> •
                            <a href="#" title="TikTok">TikTok</a>
                        </p>
                    </div>
                </section>
            </div>

            <!-- FAQ Section -->
            <section class="contact-faq" style="margin-top: var(--space-3xl);" aria-labelledby="faq-title">
                <h2 id="faq-title">❓ Häufig gestellte Fragen</h2>
                <div class="grid grid--2">
                    <div class="card">
                        <div class="card__body">
                            <h3>Wie lange dauert der Versand?</h3>
                            <p>Bestellungen werden innerhalb von 2-4 Werktagen versendet. Die Lieferzeit beträgt ca. 2-5
                                Werktage.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__body">
                            <h3>Kann ich meine Bestellung stornieren?</h3>
                            <p>Ja, Bestellungen können bis 24 Stunden nach Aufgabe storniert werden. Kontaktiere uns per
                                E-Mail!</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__body">
                            <h3>Gibt es Rabatte für Großbestellungen?</h3>
                            <p>Ja! Für Bestellungen ab 5 Stück bieten wir spezielle Rabatte an. Kontaktiere uns für ein
                                Angebot.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__body">
                            <h3>Sind eure Produkte biologisch?</h3>
                            <p>Unsere Kalender sind aus 100% nachhaltigem Papier. Alle unsere Rezepte verwenden
                                Bio-Qualität.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

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

<?php
/**
 * Kontaktformular Handler
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'send_message') {
        $name = htmlspecialchars(trim($_POST['name'] ?? ''));
        $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
        $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
        $message = htmlspecialchars(trim($_POST['message'] ?? ''));
        $newsletter = isset($_POST['newsletter']) ? 1 : 0;

        $errors = [];

        if (empty($name)) $errors[] = 'Name ist erforderlich';
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Gültige E-Mail ist erforderlich';
        }
        if (empty($subject)) $errors[] = 'Betreff ist erforderlich';
        if (empty($message)) $errors[] = 'Nachricht ist erforderlich';

        if (!empty($errors)) {
            echo "<script>
                const errors = " . json_encode($errors) . ";
                const notification = document.getElementById('notification');
                const alert = document.createElement('div');
                alert.className = 'alert alert--error';
                alert.innerHTML = '<strong>Fehler:</strong><ul><li>' + errors.join('</li><li>') + '</li></ul>';
                notification.appendChild(alert);
            </script>";
        } else {
            // Simulation: Nachricht gespeichert
            echo "<script>
                showNotification('✅ Nachricht erfolgreich versendet! Wir antworten in Kürze.', 'success', 5000);
                document.querySelector('form').reset();
            </script>";
        }
    }
}
?>
