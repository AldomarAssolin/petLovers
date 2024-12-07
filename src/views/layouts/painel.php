<?php

// Função de autoload personalizada
spl_autoload_register(function ($class) {
    include($class . '.php');
});

require('application.php');
$app = new Application();
// Executa a aplicação
$app->executar();

?>