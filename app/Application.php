<?php

declare(strict_types=1);

namespace App;

use App\Routing\Router;
use App\View\View;

class Application
{
    public function __construct(
        private Router $router
    ) {

    }

    public function run(): void
    {

        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $route = $this->router->resolve($method, $path);

        if ($route === null) {
            View::render('404');
            return;
        }

        $controllerClass = $route->getController();

        $controller = new $controllerClass();

        $action = $route->getAction();

        $view = $controller->$action();

        View::render($view);
    }
}