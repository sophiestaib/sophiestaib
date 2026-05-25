<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Seite nicht gefunden | HUERTA</title>
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
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content" id="main-content" role="main">
        <div class="container" style="text-align: center; padding: 4rem 1rem;">
            <h2 style="font-size: 3rem; color: var(--color-accent);">404</h2>
            <h3>Seite nicht gefunden</h3>
            <p>Entschuldigung, diese Seite existiert nicht oder wurde verschoben.</p>
            <a href="/" class="btn btn--primary btn--large">Zur Startseite</a>
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

<script>
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
</body>
</html>
