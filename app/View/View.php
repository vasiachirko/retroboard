<?php

declare(strict_types=1);

namespace App\View;

class View
{
    public static function render(string $view): void
    {
        $file = __DIR__ . '/../../views/' . $view . '.php';

        if (!file_exists($file)) {
            throw new Exception("View '{$view}' not found.");
        }

        require $file;
    }
}