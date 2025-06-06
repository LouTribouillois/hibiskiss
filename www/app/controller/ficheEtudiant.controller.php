<?php

require_once 'app/controller/controller.php';
require_once 'app/model/model.php';

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */

function generateficheEtudiantPage() {
    $data = [
        'page_title' => "Tech'Etud",
        'view' => 'app/view/ficheEtudiant.php',
        'layout' => 'app/view/common/layout.php',
    ];
    generatePage($data);
} 