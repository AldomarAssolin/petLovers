<?php

namespace src\views;

use src\controllers\HeaderController;
use src\controllers\FooterController;

class MainView
{
    private $header;
    private $footer;

    public function __construct()
    {
        $this->header = new HeaderController();
        $this->footer = new FooterController();
    }

    public function render($viewName, $data = [])
    {
        $this->header->executar();

        $viewName = ucfirst($viewName) . 'View';
        $viewClass = "src\\views\\pages\\$viewName";

        if (class_exists($viewClass)) {
            $view = new $viewClass();
            if (method_exists($view, 'render')) {
                $view->render($data);
            } else {
                echo "Método render não encontrado em $viewName";
            }
        } else {
            echo "Classe $viewName não encontrada";
        }

        $this->footer->executar();
    }
}