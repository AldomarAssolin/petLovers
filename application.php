<?php



use src\controllers\ErrorController;

class Application
{

    public function executar()
    {
        
        $url = $_GET['url'] ?? 'home'; //verifica se a url foi passada
        $url = array_filter(explode('/', $url)); //quebra a url em um array

        $url = ucfirst($url[0]); //primeira letra maiúscula
        $url .= 'Controller'; //concatena a palavra controller

        //verifica se o arquivo existe
        if (file_exists('src/controllers/' . $url . '.php')) {
            require('src/controllers/' . $url . '.php');
            //instanciar a classe
            $className = 'src\\controllers\\' . $url;
            //echo 'Carregando a classe ' . $url . '<br>';
            //executar o método
            $controller = new $className();
            $controller->executar();
        } else {
            $url = new ErrorController();
            $url->executar();
        }
    }
}
