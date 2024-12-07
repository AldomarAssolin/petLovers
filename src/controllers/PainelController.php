<?php

namespace src\controllers;

use src\models\PainelModel;

class PainelController{

    private $db;
    private $model;

    // Constructor with database
    public function __construct(){
        //$this->db = $db;
        $this->model = new PainelModel();
    }

    // Index function
    public function index(){
        $data = $this->model->getHomePainel();
        include './src/views/painel/home/home.php';
    }
}


?>