<?php 

require_once __DIR__ . '/autoloading.php';
require_once __DIR__ . '/vendor/autoload.php';

use Controllers\Router;

$request = $_SERVER['REQUEST_URI'];

Router::route($request);