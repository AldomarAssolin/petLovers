<?php
namespace src\controllers;

use src\models\BlogModel;
use src\views\MainView;
use src\controllers\Controller;

class BlogController extends Controller
{

    private $db;
    private $model;
    private $view;

    // Constructor with database
    public function __construct(){
        //$this->db = $db;
        $this->model = new BlogModel();
        $this->view = new MainView('blog');
    }

    // Index function
    public function executar(){
        $data = $this->model->getBlog();
        $this->view->render('blog', $data);
        
    }
}


?>