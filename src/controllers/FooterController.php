<?php

namespace src\controllers;

use src\models\FooterModel;

class FooterController{

    private $db;
    private $model;

    // Constructor with database
    public function __construct(){
        //$this->db = $db;
        $this->model = new FooterModel();
    }

    // Index function
    public function executar(){
        $data = $this->model->getFooter();

        require_once './src/views/templates/footer.php';
        
    }
}


?>