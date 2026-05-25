<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datenschutz | HUERTA</title>
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
                <h1>Datenschutzerklärung</h1>

                <section>
                    <h2>1. Datenschutz auf einen Blick</h2>
                    <h3>Allgemeine Hinweise</h3>
                    <p>
                        Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen
                        Daten geschieht, wenn Sie diese Website besuchen. Personenbezogene Daten sind alle Daten, mit
                        denen
                        Sie persönlich identifiziert werden können.
                    </p>
                </section>

                <section>
                    <h2>2. Allgemeine Hinweise und Pflichtinformationen</h2>
                    <h3>Datenschutz</h3>
                    <p>
                        Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst.
                        Ihre personenbezogenen Daten werden vertraulich und entsprechend der gesetzlichen
                        Datenschutzvorschriften sowie dieser Datenschutzerklärung behandelt.
                    </p>
                </section>

                <section>
                    <h2>3. Datenerfassung auf unseren Webseiten</h2>
                    <h3>Server-Log-Dateien</h3>
                    <p>
                        Der Provider der Seiten erhebt und speichert automatisch Informationen in so genannten
                        Server-Log-Dateien, die Ihr Browser automatisch an uns übermittelt. Dies sind:
                    </p>
                    <ul style="margin-left: var(--space-xl); margin-bottom: var(--space-lg);">
                        <li>Browsertyp und Browserversion</li>
                        <li>Verwendetes Betriebssystem</li>
                        <li>Referrer URL</li>
                        <li>Hostname des zugreifenden Rechners</li>
                        <li>Uhrzeit der Serveranfrage</li>
                        <li>IP-Adresse</li>
                    </ul>
                </section>

                <section>
                    <h2>4. Ihre Rechte</h2>
                    <p>
                        Sie haben das Recht, kostenlosen Zugang zu Ihren gespeicherten Daten zu erhalten und
                        ggf. deren Berichtigung oder Löschung zu verlangen. Falls Sie Fragen zu unserem Umgang
                        mit Ihren Daten haben, kontaktieren Sie uns bitte über das Kontaktformular oder direkt
                        unter der angegebenen E-Mail-Adresse im Impressum.
                    </p>
                </section>

                <section>
                    <h2>5. Cookies</h2>
                    <p>
                        Unsere Webseite verwendet minimal Cookies, die für die Funktionalität notwendig sind.
                        Diese werden ausschließlich für die Sitzungsverwaltung und Nutzererfahrung verwendet.
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
