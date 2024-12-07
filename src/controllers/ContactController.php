<?php
namespace src\controllers;

use src\models\ContactModel;
use src\views\MainView;
use src\controllers\Controller;

class ContactController extends Controller
{

    private $db;
    private $model;
    private $view;

    // Constructor with database
    public function __construct(){
        //$this->db = $db;
        $this->model = new ContactModel();
        $this->view = new MainView('contact',);
    }

    // Index function
    public function executar(){
        $data = $this->model->getContact();
        $this->view->render('contact', $data);
        
    }
}


?>