<?php

require_once('config.php');
// Carrega as dependências
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?= SITE ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= ASSETS ?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="<?= INCLUDE_PATH ?>lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= INCLUDE_PATH ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= INCLUDE_PATH ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= ASSETS ?>css/style.css" rel="stylesheet">
    <link href="<?= ASSETS ?>css/custom.css" rel="stylesheet">
</head>

<body>
<?php

// Função de autoload personalizada
$autoload = function($class) {
    // Converte namespace separators para directory separators
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    
    // Define o diretório base do projeto
    $baseDir = __DIR__ . DIRECTORY_SEPARATOR;
    
    // Caminho completo do arquivo
    $file = $baseDir . $class . '.php';
    
    // Verifica se o arquivo existe e o inclui
    if (file_exists($file)) {
        require $file;
    }
};

// Registra a função de autoload personalizada
spl_autoload_register($autoload);

// Instancia a aplicação
$app = new Application();
// Executa a aplicação
$app->executar();

?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= INCLUDE_PATH ?>lib/easing/easing.min.js"></script>
    <script src="<?= INCLUDE_PATH ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= INCLUDE_PATH ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= INCLUDE_PATH ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= INCLUDE_PATH ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="<?= INCLUDE_PATH ?>mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?= ASSETS ?>js/main.js"></script>
</body>

</html>