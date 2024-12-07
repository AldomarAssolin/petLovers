<?php
namespace src\controllers;

use src\models\ServiceModel;
use src\views\MainView;
use src\controllers\Controller;

class ServiceController extends Controller
{

    private $db;
    private $model;
    private $view;

    // Constructor with database
    public function __construct(){
        //$this->db = $db;
        $this->model = new ServiceModel();
        $this->view = new MainView('service');
    }

    // Index function
    public function executar(){
        $data = $this->model->getService();
        $this->view->render('service', $data);
        
    }
}


?>