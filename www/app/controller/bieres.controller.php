<?php

require_once 'app/controller/controller.php';
require_once 'app/model/biere.model.php';
require_once 'app/model/model.php';

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */

function generateNosBieresPage(){
    $data = [
        'bieres' => getALLBieres(),
        'css' => 'nosBieres.css',
        'page_title' => "HibisKiss",
        'view' => 'app/view/nosbieres.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}

function generateBierePage() {
    $id = isset($_GET['id']) ? (int) $_GET['id'] : null;
    if ($id === null) {
        $_SESSION['FLASH'] = 'ID non trouvé';
        header('Location: index.php?route=error');
        exit();
    }else{
        $data = [
            'biere' => getBiere($id),
            'css' => 'bierePage.css',
            'js'=> "bierePage.js",
            'page_title' => "Tech'Etud",
            'view' => 'app/view/bierePage.view.php',
            'layout' => 'app/view/common/layout.php',
        ];
        generatePage($data);
    }
} 