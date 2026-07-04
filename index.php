<?php

declare(strict_types=1);
require_once __DIR__ . '/app/Autoloader.php';

$loader = new \App\Autoloader();

spl_autoload_register([$loader, 'load']);

use App\Application;

$app = new Application();
$app->run();