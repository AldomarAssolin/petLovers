<?php

namespace src\controllers;

use src\models\ErrorModel;

class ErrorController
{

    private $model;

    public function __construct()
    {
        $this->model = new ErrorModel();
    }

    public function executar()
    {
        $data = $this->model->getError();
        include('src/views/pages/error.php');
    }
}
