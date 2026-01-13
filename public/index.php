<?php

declare(strict_types=1);

use App\Core\Autoloader;
use App\Core\Router;

require_once dirname(__DIR__) . '/Core/Autoload.php';
Autoloader::register();
$router = new Router();
$router->routes();
