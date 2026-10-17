<?php
/**
 * index.php
 * Entry point aplikasi. Semua request (berkat .htaccess) diarahkan
 * ke sini, lalu diteruskan ke Router untuk dipetakan ke
 * controller+action yang sesuai.
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/core/Router.php';

$router = new Router();
$router->dispatch();
