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
            'email' => 'contato@petlover.com',
            'tel' => '+012 345 6789',
            'endereco' => 'Santa Maria, RS',
            'description' => 'Oferecemos planos mensais com descontos especiais para cuidados regulares do seu pet. Nossos pacotes incluem combinações de serviços que garantem o bem-estar contínuo do seu animal de estimação.'
        ];
    }
}

?>