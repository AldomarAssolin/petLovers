<?php

use src\controllers\ErrorController;

class Application
{
    public function executar()
    {
        $url = $this->getUrl();
        $controllerName = $this->getControllerName($url);

        if ($this->controllerExists($controllerName)) {
            $this->loadController($controllerName);
        } else {
            $this->loadErrorController();
        }
    }

    private function getUrl()
    {
        return filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL) ?? 'home';
    }

    private function getControllerName($url)
    {
        $urlParts = array_filter(explode('/', $url));
        $controllerName = ucfirst($urlParts[0] ?? 'home') . 'Controller';
        return "src\\controllers\\$controllerName";
    }

    private function controllerExists($controllerName)
    {
        return class_exists($controllerName);
    }

    private function loadController($controllerName)
    {
        $controller = new $controllerName();
        if (method_exists($controller, 'executar')) {
            $controller->executar();
        } else {
            $this->loadErrorController();
        }
    }

    private function loadErrorController()
    {
        $errorController = new ErrorController();
        $errorController->executar();
    }
}