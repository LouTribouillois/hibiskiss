<?php

require_once 'app/controller/controller.php';
require_once 'app/model/model.php';

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */

function generateBrassagePage(){
    $data = [
        'css' => 'brassage.css',
        'page_title' => "HibisKiss",
        'view' => 'app/view/brassage.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}