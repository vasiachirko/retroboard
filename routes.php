<?php

declare(strict_types=1);

use App\Controllers\HomeController;
use App\Controllers\AboutController;
use App\Routing\Router;

/** @var Router $router */

$router->get('/', HomeController::class, 'index');
$router->get('/home', HomeController::class, 'index');
$router->get('/about', AboutController::class, 'index');
