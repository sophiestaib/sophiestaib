<?php
/**
 * HUERTA API - Warenkorb-API
 */

// Session starten
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Header setzen
header('Content-Type: application/json');

// Request-URI auswerten
$request_uri = $_GET['url'] ?? '';
$request_uri = trim($request_uri, '/');
$request_parts = explode('/', $request_uri);
$endpoint = isset($request_parts[1]) ? $request_parts[1] : '';

// Routes
switch ($endpoint) {
    case 'cart-count':
        handleCartCount();
        break;

    default:
        http_response_code(404);
        echo json_encode(['error' => 'Endpoint nicht gefunden']);
        break;
}

/**
 * Cart Count Handler
 */
function handleCartCount()
{
    $count = 0;

    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $count += intval($item['quantity']);
        }
    }

    echo json_encode(['count' => $count]);
}

?>
