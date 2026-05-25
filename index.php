<?php
/**
 * HUERTA - Router und Haupteinstiegspunkt
 * Zentrale index.php - Startseite und Router
 */

require_once 'config.php';

// Session starten
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// URL auswerten für Routing
$request_uri = $_GET['url'] ?? '';
$request_method = $_SERVER['REQUEST_METHOD'];

// URI bereinigen
$request_uri = trim($request_uri, '/');
$request_parts = !empty($request_uri) ? explode('/', $request_uri) : [];
$page = !empty($request_parts[0]) ? $request_parts[0] : 'home';

// Page-Mapping
$pages = [
    'home' => 'pages/home.php',
    'seasonal-calendar' => 'pages/seasonal-calendar.php',
    'recipes' => 'pages/recipes.php',
    'shop' => 'pages/shop.php',
    'cart' => 'pages/cart.php',
    'checkout' => 'pages/checkout.php',
    'about' => 'pages/about.php',
    'contact' => 'pages/contact.php',
    'impressum' => 'pages/impressum.php',
    'privacy' => 'pages/privacy.php',
    'api' => 'api/router.php',
];

// Seite laden oder 404
$page_file = $pages[$page] ?? null;

if ($page_file && file_exists(APP_PATH . '/' . $page_file)) {
    include APP_PATH . '/' . $page_file;
} else {
    http_response_code(404);
    include APP_PATH . '/pages/404.php';
}
