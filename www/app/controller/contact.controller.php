<?php

require_once 'app/controller/controller.php';
require_once 'app/model/model.php';

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */

function generateContactPage() {
    $data = [
        'js' => 'faq.js',
        'css' => 'contact.css',
        'page_title' => "Contact HibisKiss",
        'view' => 'app/view/Contact.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
} 