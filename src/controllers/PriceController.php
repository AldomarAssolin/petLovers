<?php
namespace src\controllers;

use src\models\PriceModel;
use src\views\MainView;
use src\controllers\Controller;

class PriceController extends Controller
{

    private $db;
    private $model;
    private $view;

    // Constructor with database
    public function __construct(){
        //$this->db = $db;
        $this->model = new PriceModel();
        $this->view = new MainView('price');
    }

    // Index function
    public function executar(){
        $data = $this->model->getPrice();
        $this->view->render('price', $data);
        
    }
}


?>