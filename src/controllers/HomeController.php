<?php
namespace src\controllers;

use src\models\HomeModel;
use src\views\MainView;
use src\controllers\Controller;

class HomeController extends Controller
{

    private $db;
    private $model;
    private $view;

    // Constructor with database
    public function __construct(){
        //$this->db = $db;
        $this->model = new HomeModel();
        $this->view = new MainView('home');
    }

    // Index function
    public function executar(){
        $data = $this->model->getHome();
        $this->view->render('home', $data);
        
    }
}


?>