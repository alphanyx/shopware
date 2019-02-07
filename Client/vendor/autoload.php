<?php

// scoper-composer-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/composer-autoload.php';

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('database_read')) {
    function database_read() {
        return \_PhpScoper5c52a41b78b7a\database_read(...func_get_args());
    }
}
if (!function_exists('database_write')) {
    function database_write() {
        return \_PhpScoper5c52a41b78b7a\database_write(...func_get_args());
    }
}
if (!function_exists('printOrders')) {
    function printOrders() {
        return \_PhpScoper5c52a41b78b7a\printOrders(...func_get_args());
    }
}
if (!function_exists('composerRequiree8eb3b970c54cf6469412739e6f384e6')) {
    function composerRequiree8eb3b970c54cf6469412739e6f384e6() {
        return \_PhpScoper5c52a41b78b7a\composerRequiree8eb3b970c54cf6469412739e6f384e6(...func_get_args());
    }
}
if (!function_exists('getallheaders')) {
    function getallheaders() {
        return \_PhpScoper5c52a41b78b7a\getallheaders(...func_get_args());
    }
}

return $loader;
