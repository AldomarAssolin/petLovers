<?php 
namespace src\controllers;

use src\models\AboutModel;
use src\views\MainView;
use src\controllers\Controller;

class AboutController extends Controller
{

    private $db;
    private $model;
    private $view;

    // Constructor with database
    public function __construct(){
        //$this->db = $db;
        $this->model = new AboutModel();
        $this->view = new MainView('about');
    }

    // Index function
    public function executar(){
        $data = $this->model->getAbout();
        $this->view->render('about', $data);
    }
}


?>