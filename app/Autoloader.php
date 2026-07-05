<?php

declare(strict_types=1);

namespace App;

class Autoloader
{
    public function load(string $class): void
    {
        $prefix = 'App\\';

        if (strncmp($class, $prefix, strlen($prefix)) !== 0) {
        return;
    }
    
        $relativeClass = substr($class, strlen($prefix));

        $file = __DIR__ . '/' . str_replace('\\', '/', $relativeClass) . '.php';

        require_once $file;

        echo $file . '<br>';
    }
}