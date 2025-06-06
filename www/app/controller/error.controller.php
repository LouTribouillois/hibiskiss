<?php
require_once 'app/controller/controller.php';
require_once 'app/model/model.php';

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */

function generateErrorPage() {
    $data = [
        'css' => "error.css",
        'page_title' => "Tech'Etud",
        'view' => 'app/view/error.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
} 