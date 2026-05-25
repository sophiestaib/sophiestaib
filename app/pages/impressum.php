<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressum | HUERTA</title>
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
                    <li><a href="/shop" class="nav-link">Shop</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content" id="main-content" role="main">
        <div class="container">
            <article>
                <h1>Impressum</h1>

                <section>
                    <h2>Angaben gemäß § 5 TMG</h2>
                    <p>
                        <strong>HUERTA</strong><br>
                        Nachhaltige, saisonale und vegane Ernährung<br>
                        Musterfirma<br>
                        Musterstraße 123<br>
                        12345 Musterstadt<br>
                        Deutschland
                    </p>
                </section>

                <section>
                    <h2>Vertreter</h2>
                    <p>
                        Vertreten durch:<br>
                        Max Mustermann
                    </p>
                </section>

                <section>
                    <h2>Kontakt</h2>
                    <p>
                        E-Mail: <a href="mailto:info@huerta-example.de">info@huerta-example.de</a><br>
                        Telefon: <a href="tel:+49123456789">+49 (0) 123 456789</a>
                    </p>
                </section>

                <section>
                    <h2>Umsatzsteuer-Identifikationsnummer</h2>
                    <p>Gemäß § 27a UStG: DE123456789</p>
                </section>

                <section>
                    <h2>Haftungsausschluss</h2>
                    <h3>Haftung für Inhalte</h3>
                    <p>
                        Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt.
                        Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können
                        wir jedoch keine Gewähr übernehmen. Gemäß § 7 Abs. 1 TMG sind wir als
                        Dienstanbieter für eigene Inhalte auf diesen Seiten nach den allgemeinen
                        Gesetzen verantwortlich.
                    </p>
                </section>

                <p class="mt-xl">
                    <a href="/" class="btn btn--primary">Zur Startseite</a>
                </p>
            </article>
        </div>
    </main>

    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="footer__bottom">
                <p>&copy; <span id="year"></span> HUERTA. Alle Rechte vorbehalten.</p>
            </div>
        </div>
    </footer>
</div>

<script>
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
</body>
</html>
