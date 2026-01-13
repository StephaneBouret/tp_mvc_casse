<?php

declare(strict_types=1);

namespace App\Core;

final class Router
{
    public function routes(): void
    {
        $controller = $_GET['controller'] ?? 'creation';
        $action = $_GET['action'] ?? 'index';
        $controllerClass = 'App\\Controllers\\' . ucfirst($controller) . 'Controller';
        $controllerObject = new $controllerClass();
        call_user_func([$controllerObject, $action], $_GET);
    }
}
