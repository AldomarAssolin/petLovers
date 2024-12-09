<?php

namespace src\models;

class HomeModel
{
    private $db;
    private $data;

    // public function __construct($data){
    //     //$this->db = $db;
    //     $this->data = $data;
    // }

    public function getHome($data = [])
    {

        // Retorna um array com os dados necessários para a página inicial
        $data = [
            'title' => 'PetLovers - Seu Pet Shop de Confiança',
            'banner' => [
                [
                    'titulo' => 'PetLovers',
                    'descricao' => 'Seu Pet Shop de Confiança',
                    'imagem' => 'assets/img/about-1.jpg'
                ],
                [
                    'titulo' => 'Banho e Tosa',
                    'descricao' => 'Oferecemos banho e tosa para todas as raças de cães e gatos',
                    'imagem' => 'assets/img/about-2.jpg'
                ],
                [
                    'titulo' => 'Hospedagem',
                    'descricao' => 'Hospedagem para cães e gatos com muito amor e carinho',
                    'imagem' => 'assets/img/about-3.jpg'
                ]
            ],
            'services' => [
                ['nome' => 'Banho e Tosa', 'icone' => 'flaticon-dog', 'descricao' => 'Oferecemos banho e tosa para todas as raças de cães e gatos'],
                ['nome' => 'Hospedagem', 'icone' => 'flaticon-house', 'descricao' => 'Hospedagem para cães e gatos com muito amor e carinho'],
                ['nome' => 'Pet Shop', 'icone' => 'flaticon-grooming', 'descricao' => 'Produtos premium para o seu pet']
            ],
            'description' => 'Oferecemos planos mensais com descontos especiais para cuidados regulares do seu pet. Nossos pacotes incluem combinações de serviços que garantem o bem-estar contínuo do seu animal de estimação.',
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
        return $data;
    }
}
