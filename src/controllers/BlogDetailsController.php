<?php
namespace src\controllers;

use src\models\BlogDetailsModel;
use src\views\MainView;
use src\controllers\Controller;

class BlogDetailsController extends Controller
{

    private $db;
    private $model;
    private $view;

    // Constructor with database
    public function __construct(){
        //$this->db = $db;
        $this->model = new BlogDetailsModel();
        $this->view = new MainView('blogDetails');
    }

    // Index function
    public function executar(){
        $data = $this->model->getBlogDetails();
        $this->view->render('blogDetails', $data);
        
    }
}


?>