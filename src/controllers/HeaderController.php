<?php

namespace src\controllers;

use src\models\HeaderModel;

class HeaderController{

    private $model;

    // Constructor with database
    public function __construct(){
        $this->model = new HeaderModel();
    }

    // Index function
    public function executar(){
        $data = $this->model->getHeader();
        include './src/views/templates/header.php';
    }
}


?>