<?php
    require 'vendor/autoload.php';
    use Candidature\Entity\Folder;
    use Candidature\Controler\Controler;

    //Initialisation Twig
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/src/Resources/View');
    $twig = new Twig_Environment($loader);

    $controler = new Controler();

    //routing
    $page = 'home';
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }

    //router
    switch($page){
        case 'home':
            echo $twig->render('home.html.twig');
            break;
        case 'connection':
            echo $twig->render('connection.html.twig');
            break;
        default:
            echo ('Page not found !');
            break;
    }
