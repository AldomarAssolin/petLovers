<?php

namespace src\models;

class HeaderModel
{
    private $db;

    // public function __construct($db){
    //     $this->db = $db;
    // }

    public function getHeader()
    {
        // Retorna um array com os dados necessários para a página inicial
        return [
            'title' => 'Pet',
            'subtitle' => 'Lover',
            'atendimento' => '8:00 - 18:00',
            'email' => 'contato@petlover.com',
            'telefone' => '+012 345 6789'
        ];
    }
}
