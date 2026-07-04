<?php

declare(strict_types=1);

class Application
{
    public function run(): void
    {
        $uri = $_SERVER['REQUEST_URI'];

        $this->handleRoute($uri);
    }

    private function handleRoute(string $uri): void
    {
        $path = trim($uri, '/');

        if ($path === '') {
            $path = 'home';
        }

        $this->render($path);
    }

    private function render(string $view): void
    {
        require __DIR__ . "/../views/{$view}.php";
    }
}