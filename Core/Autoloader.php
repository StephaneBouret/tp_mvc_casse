<?php

declare(strict_types=1);

namespace App\Core;

final class Autoloader
{
    public static function register(): void
    {
        spl_autoload_register([self::class, 'autoload']);
    }
    private static function autoload(string $class): void
    {
        $prefix = 'App\\';
        if (!str_starts_with($class, $prefix)) {
            return;
        }
        if (str_contains($class, '..')) {
            return;
        }
        $relativeClass = substr($class, strlen($prefix));
        $relativePath = str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass) . '.php';
        $baseDir = dirname(__DIR__);
        $file = $baseDir . DIRECTORY_SEPARATOR . $relativePath;
        if (is_file($file)) {
            require_once $file;
        }
    }
}
