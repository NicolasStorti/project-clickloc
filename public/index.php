<?php

use Clickloc\Projeto\Controllers\Controller;
use Clickloc\Projeto\Controllers\HomeViewController;

require_once __DIR__ . '/../vendor/autoload.php';

if (!array_key_exists('PATH_INFO', $_SERVER) || $_SERVER['PATH_INFO'] === '/') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $controller = new HomeViewController();
    }
}
/** @var Controller $controller */

$controller->req();