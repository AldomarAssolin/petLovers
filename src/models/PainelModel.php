<?php

namespace src\models;
class PainelModel{
    private $db;

    // public function __construct($db){
    //     $this->db = $db;
    // }

    public function getHomePainel(){
        include './views/painel/home/home.php';
    }

}

?>