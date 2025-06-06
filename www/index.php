<?php
session_start();

require_once 'config.php';
require_once 'app/model/model.php';
require_once 'app/controller/controller.php';



$route='home';
if (!empty($_GET['route'])) {
    $route=$_GET['route'];
}


switch ($route) {
    case 'home':
        
        require_once ('app/controller/home.controller.php');
        generateHomePage();
        
    break;
    
    case 'trombinoscope':
            
        require_once ('app/controller/trombinoscope.controller.php');
        generateTrombinoscopePage();

    break;

    case 'contact':
            
        require_once ('app/controller/contact.controller.php');
        generateContactPage();

    break;
    
    case 'student':
        require_once ('app/controller/trombinoscope.controller.php');
        generateStudentPage();
    break;
    
    case 'biere':
        require_once ('app/controller/bieres.controller.php');
        generateBierePage();
    break;
    
    case 'nosBieres':
            require_once ('app/controller/bieres.controller.php');
            generateNosBieresPage();
    break;

    case 'equipe':
            require_once ('app/controller/equipe.controller.php');
            generateEquipePage();
    break;
    
    case 'brassage':
            require_once ('app/controller/brassage.controller.php');
            generateBrassagePage();
    break;

    case 'contact':
            require_once ('app/controller/contact.controller.php');
            generateContactPage();
    break;

    case 'panier':
            require_once ('app/controller/panier.controller.php');
            generatePanierPage();
    break;
    
    case 'error':
            require_once ('app/controller/error.controller.php');
            generateErrorPage();
    default:            
    exit;
        /*die("Erreur : Page inconnue !")*/;
}


