<?php

namespace core;

use app\Controllers\HomeController;

class Router
{
    protected $routes = [];

    public function addRoute($route, $controller, $action, $params = [])
    {
        $this->routes[$route] = ['controller' => $controller, 'action' => $action, 'params' => $params];
    }

    public function dispatch($uri)
    {

        // get parameter
        $segments = explode('/', $uri);

        // Remove any empty segments
        $segments = array_filter($segments);

        // Get the last segment as the parameter
        $param = end($segments);

        // Remove the last segment from the URI
        is_numeric($param) ? array_pop($segments) : $param = NULL;

        // get route
        $uri = '/' . implode('/', $segments);

        if (array_key_exists($uri, $this->routes)) {
            $controller = $this->routes[$uri]['controller'];
            $action = $this->routes[$uri]['action'];
            $controller = new $controller();
            $param ? $controller->$action($param) : $controller->$action();
        } else {
            $homeController = new HomeController();
            $homeController->notFound();
        }
    }
}
