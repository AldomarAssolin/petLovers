<?php

namespace src\views;

use src\controllers\HeaderController;
use src\controllers\FooterController;

class MainView
{
    private $fileName;
    private $header;
    private $footer;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->header = new HeaderController();
        $this->footer = new FooterController();
    }

    public function render($arr = [])
    {
        $this->header->executar();
        include('src/views/pages/' . $this->fileName . '.php');
        $this->footer->executar();
    }
}

?>