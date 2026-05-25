# 🌱 HUERTA – Nachhaltige, Saisonale & Vegane Ernährung

Eine moderne, vollständig funktionstüchtige Website für HUERTA, die Plattform für nachhaltige Ernährung mit
Saisonkalender, Rezepten und Online-Shop.

## 📋 Projektstruktur

```
huerta/
├── index.php                   # Router und Einstiegspunkt
├── config.php                  # Konfiguration und Konstanten
├── .htaccess                   # URL Rewriting für saubere URLs
│
├── app/
│   ├── pages/                  # Alle Seiten
│   │   ├── home.php           # Startseite
│   │   ├── seasonal-calendar.php  # Saisonkalender
│   │   ├── recipes.php        # Rezepte-Seite
│   │   ├── shop.php           # Shop-Seite
│   │   ├── cart.php           # Warenkorb
│   │   ├── checkout.php       # Bestellformular
│   │   ├── about.php          # Über uns
│   │   ├── contact.php        # Kontakt
│   │   ├── impressum.php      # Impressum
│   │   ├── privacy.php        # Datenschutz
│   │   └── 404.php            # 404-Seite
│   │
│   ├── api/
│   │   └── router.php         # API-Endpunkte
│   │
│   └── helpers/
│       └── functions.php      # Globale PHP-Funktionen
│
├── assets/
│   ├── css/
│   │   └── style.css          # Alle Styles (modernes CSS mit Variablen)
│   │
│   └── js/
│       ├── main.js            # Zentrale JS-Funktionalität
│       └── shop.js            # Shop-spezifische Funktionen
│
└── README.md                   # Diese Datei
```

## 🚀 Installation & Setup

### Anforderungen

- PHP 7.4 oder höher
- Web-Server mit .htaccess-Unterstützung (Apache)
- Moderne Browser mit JavaScript-Unterstützung

### Installation

1. **Projekt in Verzeichnis kopieren:**
   ```bash
   cp -r untitled/ /var/www/huerta
   cd /var/www/huerta
   ```

2. **.htaccess aktivieren (Apache):**
    - Stelle sicher, dass `mod_rewrite` aktiviert ist
    - Die .htaccess-Datei leitet alle Requests auf index.php um

3. **Lokale Entwicklung (mit PHP Built-in Server):**
   ```bash
   php -S localhost:8000
   ```
   Dann im Browser öffnen: `http://localhost:8000`

4. **Mit XAMPP/Laragon:**
    - Projekt in `htdocs` bzw. `www` Ordner kopieren
    - URL: `http://localhost/huerta`

## 🎨 Technologie-Stack

### **Frontend**

- **HTML5** – Semantisches Markup mit ARIA-Labels
- **CSS3** – Modernes CSS mit CSS-Variablen (keine Heavy-Frameworks)
    - Responsive Design (Mobile-First)
    - Flexbox & Grid Layout
    - Custom Properties (:root)
- **JavaScript (Vanilla)** – Keine jQuery, kein Framework
    - Fetch API für Daten
    - DOM Manipulation
    - Event Handling

### **Backend**

- **PHP 7.4+** – Server-seitige Logik
- **Sessions** – Warenkorb-Verwaltung via `$_SESSION`
- **Form Handling** – POST-basierte Formulare mit Validierung

### **Design-System**

```css
:root {
  /* Farben */
  --color-primary-dark: #2d5016;    /* Dunkelgrün */
  --color-cream: #faf8f3;           /* Warmweiß */
  --color-text-primary: #3d3530;    /* Erdbraun */
  --color-accent: #d89b9a;          /* Sanftes Rosa */

  /* Typografie */
  --font-family-heading: 'Playfair Display';
  --font-family-body: 'IBM Plex Mono';
  
  /* Spacing, Shadow, Border Radius, etc. */
}
```

## 📄 Seiten-Übersicht

### 1. **Startseite** (`/`)

- Hero-Section mit Mission Statement
- Features (Nachhaltig, Saisonal, Vegan)
- Call-to-Action Buttons

### 2. **Saisonkalender** (`/seasonal-calendar`)

- Interaktive Monatskarten (Jan-Dez)
- Aktuelle Saison hervorgehoben
- Tipps zum saisonalen Einkauf

### 3. **Rezepte** (`/recipes`)

- Vegane Rezepte-Karten
- Ingredients & Cooking Time
- Saisonal aktualisiert

### 4. **Shop** (`/shop`)

- Produkt-Anzeige (HUERTA Saisonkalender)
- Add-to-Cart Funktionalität
- Versand- & Zahlungsinfo

### 5. **Warenkorb** (`/cart`)

- Artikel-Übersicht mit Mengen-Editor
- Bestellsummary (mit Versandkosten)
- "Zur Kasse" Button

### 6. **Kasse/Checkout** (`/checkout`)

- Bestellformular mit Validierung
- Zahlungsarten-Auswahl
- Bestellbestätigung

### 7. **Über uns** (`/about`)

- Mission & Werte
- Team-Vorstellung
- Impact-Statistiken

### 8. **Kontakt** (`/contact`)

- Kontaktformular
- Kontaktinformationen
- FAQ-Sektion

### 9. **Rechtliche Seiten**

- Impressum (`/impressum`)
- Datenschutz (`/privacy`)

### 10. **404-Seite**

- Freundliche Fehlerseite

## 🛒 Warenkorb-Funktionalität

### Workflow

```
1. Produkt hinzufügen (POST) → Session['cart'] speichert Produkte
   ├─ Produkt-ID
   ├─ Name
   ├─ Preis
   └─ Menge

2. Warenkorb bearbeiten
   ├─ Mengen updaten
   ├─ Artikel entfernen
   └─ Warenkorb leeren

3. Zur Kasse gehen
   ├─ Bestellform ausfüllen
   ├─ Zahlungsart wählen
   └─ Bestellung abschließen

4. Bestätigung
   ├─ Bestellnummer anzeigen
   ├─ Session leeren
   └─ Dankseite
```

### API-Endpoints

- `GET /api/cart-count` – Gibt Anzahl der Artikel zurück (JSON)

## 🔐 Barrierefreiheit (WCAG 2.1 AA)

✅ **Semantisches HTML5**

- `<header>`, `<nav>`, `<main>`, `<footer>`
- `<section>`, `<article>` mit `aria-labelledby`

✅ **ARIA-Attribute**

- `role="banner"`, `role="navigation"`, `role="main"`, `role="contentinfo"`
- `aria-current="page"` für aktive Links
- `aria-label` für Icon-only Links

✅ **Tastatur-Navigation**

- Skip-Link (`<a href="#main-content">`)
- Focus-States auf alle interaktiven Elemente
- Logische Tab-Reihenfolge

✅ **Screen Reader Support**

- Alt-Texte für Bilder
- Aussagekräftige Link-Texte
- Beschreibende Form-Labels

✅ **Mobile-Responsive**

- Mobile-First Design
- Touch-friendly Buttons (min. 44x44px)
- Responsive Navigation

## 🎯 CSS-Klassennaming

**BEM-Konvention (Block, Element, Modifier):**

```css
/* Block */
.card { }

/* Element */
.card__header { }
.card__body { }

/* Modifier */
.btn--primary { }
.btn--secondary { }
.alert--success { }
```

## 📱 Responsive Breakpoints

```css
/* Mobile-First */
@media (max-width: 768px) {
  /* Tablet */
}

@media (max-width: 480px) {
  /* Mobile */
}
```

## 🔧 Konfiguration

**config.php:**

```php
define('SITE_NAME', 'HUERTA');
define('SITE_URL', 'http://localhost');
define('ENVIRONMENT', 'development');
define('DEBUG', true);
```

## 📊 Hauptfunktionen

### Shop & Warenkorb

- ✅ Session-basierter Warenkorb
- ✅ Product Management (Admin-ready)
- ✅ Cart Actions (Add, Update, Remove)
- ✅ Order Processing mit Validierung
- ✅ Versandkosten-Berechnung

### Saisonkalender

- ✅ 12 Monatskarten mit saisonalen Produkten
- ✅ Aktuelle Saison-Highlighting
- ✅ Tipps zum saisonalen Einkauf

### Rezepte

- ✅ Rezept-Karten mit Bildern
- ✅ Zutaten-Listen
- ✅ Schwierigkeitsgrad & Zeitangaben

### Kontakt & Kommunikation

- ✅ Kontaktformular mit Validierung
- ✅ FAQ-Sektion
- ✅ Newsletter-Anmeldung (Basis)

## 🚀 Performance-Tipps

1. **CSS** – Eine einzige `style.css` für schnelleres Laden
2. **JavaScript** – Vanilla JS, keine schweren Frameworks
3. **Bilder** – SVG-Platzhalter, später durch echte Bilder ersetzen
4. **Caching** – Browser-Caching via .htaccess
5. **Minification** – CSS & JS können minifiziert werden (für Production)

## 🔐 Sicherheit

### Implementierte Maßnahmen

- ✅ `htmlspecialchars()` für XSS-Prevention
- ✅ `filter_var()` für Email-Validierung
- ✅ POST-Redirect-GET Pattern (verhindert Double-Submits)
- ✅ Input-Validierung auf Server-Seite

### Zu erweitern (für Production)

- CSRF-Token in Formularen
- Rate Limiting auf API
- Datenbankverbindung mit PDO
- Email-Validierung & Bestätigung
- SSL/TLS (HTTPS)
- Content Security Policy (CSP) Header

## 📝 Lizenzen

Die Website nutzt folgende externe Ressourcen:

- **Google Fonts**: Playfair Display & IBM Plex Mono
- **Icons**: Unicode Emojis

## 🤝 Erweiterungsmöglichkeiten

### Short-Term

- [ ] Produktseiten mit mehr Details
- [ ] Rezept-Seiten mit Zubereitung
- [ ] Newsletter-Integration
- [ ] Produktbewertungen

### Medium-Term

- [ ] Datenbankanbindung (MySQL/MariaDB)
- [ ] Admin-Panel für Produkte & Rezepte
- [ ] User-Registrierung & Login
- [ ] Wunschliste / Favoriten
- [ ] Blog mit Beiträgen

### Long-Term

- [ ] Payment-Gateway (Stripe, PayPal)
- [ ] Shipping API Integration
- [ ] Email-Bestätigungen
- [ ] Analytics & Tracking
- [ ] Mobile App (React Native / Flutter)

## 📚 Dokumentation

### Für Entwickler

- **PHP**: config.php, Routing in index.php
- **CSS**: :root Variablen in style.css
- **JS**: Funktionen in main.js und shop.js dokumentiert

### Für Designer

- Alle Farben in CSS-Variablen
- Typografie (Playfair Display, IBM Plex Mono)
- Spacing-System (var(--space-*))

## 🐛 Bekannte Limitierungen

1. **Keine Datenbank** – Daten werden nur in Session gespeichert
2. **Keine Email-Integration** – Bestätigungen sind simuliert
3. **Keine Payment-Integration** – Zahlungen sind simuliert
4. **Keine User-Accounts** – Keine Registrierung/Login

Diese können später implementiert werden.

## 📞 Support & Kontakt

Für Fragen oder Feedback:

- Email: info@huerta-example.de
- Phone: +49 (0) 123 456789

---

**Viel Erfolg mit HUERTA! 🌱🌿🍃**

Zuletzt aktualisiert: Mai 2026
