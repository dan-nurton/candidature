<?php
    require 'vendor/autoload.php';

    //Initialisation Twig
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/src/Resources/View');
    $twig = new Twig_Environment($loader);

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
        default:
            echo ('Page not found !');
            break;
    }



