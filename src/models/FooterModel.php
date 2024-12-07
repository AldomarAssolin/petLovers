<?php

namespace src\models;
class FooterModel{
    private $db;

    // public function __construct($db){
    //     $this->db = $db;
    // }

    public function getFooter(){
        // Retorna um array com os dados necessários para a página inicial
        return [
            'title' => 'Pet',
            'subtitle' => 'Lover',
            'infoHeader' => [
                ['nome' => 'Atendimento', 'horario' => '8.00AM - 9.00PM'],
                ['nome' => 'Email', 'email' => 'contato@petlover.com'],
                ['nome' => 'Telefone', 'numero' => '+012 345 6789']
            ]
        ];
    }
}

?>