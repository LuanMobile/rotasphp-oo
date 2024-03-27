<?php

namespace app\core;

class Router
{
    public static function run()
    {
        try {
            $routesFiltered = new RoutersFilter();
            $router = $routesFiltered->get();

            $controller = new Controller();
            $controller->execute($router);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}