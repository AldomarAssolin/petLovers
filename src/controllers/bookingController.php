<?php 

namespace src\controllers;

use src\views\MainView;
use src\models\BookingModel;

class BookingController
{
    private $db;
    private $model;
    private $view;

    // Constructor with database
    public function __construct(){
        //$this->db = $db;
        $this->model = new BookingModel();
        $this->view = new MainView('booking',);
    }

    // Index function
    public function executar(){
        $data = $this->model->getBooking();
        $this->view->render('booking', $data);
        
    }
}

