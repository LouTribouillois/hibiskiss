<?php

require_once 'app/controller/controller.php';
require_once 'app/model/panier.model.php';
require_once 'app/model/biere.model.php';
require_once 'app/model/model.php';

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */

 if(!isset($_SESSION['panier'])){
    //s'il nexiste pas une session on créer une et on mets un tableau a l'intérieur 
    $_SESSION['panier'] = array();
 }
 //récupération de l'id dans le lien
  if(isset($_GET['id'])){//si un id a été envoyé alors :
    $id = $_GET['id'] ;

    //ajouter le produit dans le panier ( Le tableau)

    if(isset($_SESSION['panier'][$id])){// si le produit est déjà dans le panier
        $_SESSION['panier'][$id]++; //Représente la quantité 
    }else {
        //si non on ajoute le produit
        $_SESSION['panier'][$id]= 1 ;
    }

   //redirection vers la page index.php
}

function generatePanierPage() {
    $data = [
        /*'product' => getProduct($id),*/
        'css' => 'panier.css',
        'page_title' => "Panier HibisKiss",
        'view' => 'app/view/panier.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
} 