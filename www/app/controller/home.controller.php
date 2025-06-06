<?php

require_once 'app/controller/controller.php';
require_once 'app/model/biere.model.php';
require_once 'app/model/model.php';

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */

 
function generateHomePage(){
    $data = [
        'css' => 'index.css',
        'bieres' => getALLBieres(),
        'page_title' => "HibisKiss",
        'view' => 'app/view/home.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}