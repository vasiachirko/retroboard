<?php

declare(strict_types=1);

namespace App\Routing;

class Router
{
    private array $routes = [];

    public function get(
        string $path,
        string $controller,
        string $action
    ): void {
        $this->routes[] = new Route(
            'GET',
            $path,
            $controller,
            $action
        );
    }

    public function resolve(string $method, string $path): ?Route
    {
        foreach ($this->routes as $route) {

            if (
                $route->getMethod() === $method &&
                $route->getPath() === $path
            ) {
                return $route;
            }
        }

        return null;
    }
}