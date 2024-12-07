<?php

namespace src\models;
class HomeModel{
    private $db;

    // public function __construct($db){
    //     $this->db = $db;
    // }

    public function getHome(){
        // Retorna um array com os dados necessários para a página inicial
        return [
            'title' => 'PetLovers - Seu Pet Shop de Confiança',
            'services' => [
                ['nome' => 'Banho e Tosa', 'icone' => 'flaticon-dog', 'descricao' => 'Oferecemos banho e tosa para todas as raças de cães e gatos'],
                ['nome' => 'Hospedagem', 'icone' => 'flaticon-house', 'descricao' => 'Hospedagem para cães e gatos com muito amor e carinho'],
                ['nome' => 'Pet Shop', 'icone' => 'flaticon-grooming', 'descricao' => 'Produtos premium para o seu pet']
            ],
            'description' => 'Cuidamos do seu pet com amor e carinho',
            'features' => [
                'Profissionais Qualificados',
                'Ambiente Climatizado',
                'Produtos Premium',
                'Atendimento Personalizado'
            ],
            'contact' => [
                'phone' => '(55) 99999-9999',
                'email' => 'contato@petlovers.com',
                'address' => 'Santa Maria, RS'
            ]
        ];
    }
}

?>