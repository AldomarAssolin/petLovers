<?php
namespace src\controllers;

use src\models\HomeModel;
use src\views\MainView;

class HomeController extends Controller
{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new HomeModel();
        $this->view = new MainView('home');
    }

    public function executar(){
        $data = $this->model->getHome();
        $this->view->render('home', $data);
    }
}