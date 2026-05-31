<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | HUERTA</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <meta name="description" content="Contact HUERTA - sustainable seasonal vegan food.">
</head>
<body>
<div id="app">
    <header class="header" role="banner">
        <div class="container header__container">
            <div class="header__logo">
                <h1><a href="../index.php" title="Go to home"><img src="../assets/img/Asset%2016.png" width="80"
                                                                    alt="HUERTA logo"></a></h1>
            </div>
            <nav class="header__nav" role="navigation" aria-label="Main navigation">
                <ul>
                    <li><a href="../index.php" class="nav-link">Home</a></li>
                    <li><a href="recipes.php" class="nav-link">Recipes</a></li>
                    <li><a href="shop.php" class="nav-link">Shop</a></li>
                    <li><a href="about.php" class="nav-link">About Us</a></li>
                    <li><a href="cart.php" class="nav-link">Cart</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content" id="main-content" role="main">
        <div class="container">
            <h1>Contact</h1>
            <p class="lead">Have questions or feedback? We'd love to hear from you.</p>
n            <div class="grid grid--2">
                <section class="contact-form">
                    <h2>Send us a message</h2>
                    <div id="notification"></div>
                    <form method="POST" action="" class="form">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input id="email" name="email" type="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn--primary">Send Message</button>
                    </form>
                </section>

                <section class="contact-info">
                    <h2>Contact Information</h2>
                    <div class="contact-item">
                        <h3>📍 Address</h3>
                        <p>HUERTA<br>Musterfirma<br>Musterstraße 123<br>12345 Musterstadt<br>Germany</p>
                    </div>
                    <div class="contact-item">
                        <h3>📧 Email</h3>
                        <p><a href="mailto:info@huerta-example.de">info@huerta-example.de</a></p>
                    </div>
                    <div class="contact-item">
                        <h3>📞 Phone</h3>
                        <p><a href="tel:+49123456789">+49 (0) 123 456789</a></p>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="footer__content">
                <div class="footer__section">
                    <h3>HUERTA</h3>
                    <p>Sustainable, seasonal, and vegan nutrition for a life in harmony with nature.</p>
                </div>
                <nav class="footer__section" aria-label="Footer navigation">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="recipes.php">Recipes</a></li>
                        <li><a href="shop.php">Shop</a></li>
                    </ul>
                </nav>
                <nav class="footer__section" aria-label="Legal links">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="privacy.php">Privacy</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__bottom">
                <p>&copy; <span id="year"></span> HUERTA. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>

<script src="../assets/js/main.js"></script>
<script src="../assets/js/cart.js"></script>
<script>
    document.getElementById('year').textContent = new Date().getFullYear();
    if (window.huertaCart) huertaCart.updateCartCount();
</script>
</body>
</html>