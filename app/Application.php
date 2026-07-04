<?php

declare(strict_types=1);

class Application
{
    public function run(): void
    {
        $this->render('home');
    }

    private function render(string $view): void
    {
        require __DIR__ . "/../views/{$view}.php";
    }
}