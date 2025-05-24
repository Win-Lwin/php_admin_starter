<?php

class App {
    protected $routes = [
        'home' => 'HomeController',
        'users' => 'UserController',
        'blogs' => 'BlogController',
        'auth' => 'AuthController'
    ];

    protected $default_controller = 'NotFoundController';
    protected $default_method = 'index';

    public function __construct() {

        $url = getURL();
        $segment = $url[0] ?? 'home';
        $controller = $this->routes[$segment] ??  $this->default_controller . 'Controller';
        $method = $url[1] ?? $this->default_method;
        $filename = '../app/controller/' . $controller . '.php';

        if (file_exists($filename)) {
            require $filename;
            $this->default_controller = $controller;
            unset($url[0]);
        } else {
            require '../app/controller/' . $this->default_controller . '.php';
        }
        $route_controller = new $this->default_controller();


        if (method_exists($route_controller, $method)) {
            $this->default_method = $method;
            unset($url[1]);
        }

        $url = array_values($url);

        call_user_func_array([$route_controller, $this->default_method], $url);
    }
}