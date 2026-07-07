<?php

declare(strict_types=1);

require_once __DIR__ . '/app/Autoloader.php';

spl_autoload_register([new App\Autoloader(), 'load']);

$router = new App\Routing\Router();

require __DIR__ . '/routes.php';

$app = new App\Application($router);

$app->run();