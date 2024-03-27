<?php

namespace app\core;

use Exception;
 
class Controller
{
    public function execute(string $router)
    {
        if (!str_contains($router ,'@' ))
        {
            throw new Exception('A rota está registrado com o formato errado.');
        }

        [$controller, $method] = explode('@', $router);
        $namespaceController = "app\controllers\\$controller";
        
        if (!class_exists($namespaceController))
        {
            throw new Exception("O controller {$namespaceController} não existe");
        }

        $controller = new $namespaceController();

        if (!method_exists($controller, $method))
        {
            throw new Exception("O método não foi encontado no $controller");
        }

        $params = new ControllerParams;
        $params = $params->get($router);

        $controller->$method($params);
    }
}