<?php
/**
 * Globale Hilfsfunktionen
 */

/**
 * Sichere HTML-Ausgabe
 */
function esc_html($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/**
 * URL-Generierung
 */
function url($path = '')
{
    return SITE_URL . '/' . ltrim($path, '/');
}

/**
 * Asset-Pfad
 */
function asset($path)
{
    return url('assets/' . $path);
}

/**
 * JSON-Response
 */
function json_response($data, $status = 200)
{
    http_response_code($status);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

/**
 * Fehler-Logging
 */
function log_error($message)
{
    $log_file = ROOT_PATH . '/logs/error.log';
    if (!is_dir(dirname($log_file))) {
        mkdir(dirname($log_file), 0755, true);
    }
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($log_file, "[$timestamp] $message\n", FILE_APPEND);
}
