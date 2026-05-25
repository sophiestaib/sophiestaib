<?php
/**
 * HUERTA - Nachhaltige, saisonale und vegane Ernährung
 * Zentrale Konfigurationsdatei
 */

// Fehlerbehandlung
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// Basis-Pfade
define('ROOT_PATH', __DIR__);
define('APP_PATH', ROOT_PATH . '/app');
define('ASSETS_PATH', ROOT_PATH . '/assets');

// Umgebung
define('ENVIRONMENT', getenv('APP_ENV') ?: 'development');
define('DEBUG', ENVIRONMENT === 'development');

// Datenbankverbindung (Placeholder - später konfigurieren)
define('DB_HOST', 'localhost');
define('DB_NAME', 'huerta');
define('DB_USER', 'root');
define('DB_PASS', '');

// Site-Informationen
define('SITE_NAME', 'HUERTA');
define('SITE_URL', 'http://localhost');

// Laden von globalen Funktionen
require_once APP_PATH . '/helpers/functions.php';
