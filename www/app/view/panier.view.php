    <?php
    if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    //suppression
    unset($_SESSION['panier'][$id_del]);
   } ?>
    <section class="page-hero" style="background-image: url('assets/background/cart-bg.jpg');">
        <div class="container">
            <h1>VOTRE PANIER</h1>
            <p>Réservez vos bières préférées</p>
        </div>
    </section>

    <section class="cart-content">
        <div class="container">
            <div class="cart-grid">
                <div class="cart-items">
                    <h2>VOS ARTICLES</h2>
                    <div class="cart-table">
                        <div class="cart-header">
                            <div class="header-product">Produit</div>
                            <div class="header-price">Prix</div>
                            <div class="header-quantity">Quantité</div>
                            <div class="header-total">Total</div>
                            <div class="header-remove"></div>
                        </div>
                    <?php 
              $total = 0 ;
              // liste des produits
              //récupérer les clés du tableau session
              $ids = array_keys($_SESSION['panier']);
              //s'il n'y a aucune clé dans le tableau
              if(empty($ids)){ ?>
                <div class="cart-body">
                            <div class="empty-cart">
                                <p>Votre panier est vide</p>
                                <a href="index.php?route=nosBieres" class="btn btn-primary">Découvrir nos bières</a>
                            </div>
                        </div>
              <?php }else {
                //si oui 

                //lise des produit avec une boucle foreach
                foreach($bieres as $biere):
                    //calculer le total ( prix unitaire * quantité) 
                    //et aditionner chaque résutats a chaque tour de boucle
                    $total = $total + $biere['price'] * $_SESSION['panier'][$biere['id']] ;
                ?>
                <tr>
                    <td><img src="project_images/<?=$biere['img']?>"></td>
                    <td><?=$biere['nom']?></td>
                    <td><?=$biere['prix']?>€</td>
                    <td><?=$_SESSION['panier'][$biere['id']] // Quantité?></td>
                    <td><a href="panier.php?del=<?=$biere['id']?>"><img src="delete.png"></a></td>
                </tr>

            <?php endforeach ;} ?>

                        
                    </div>
                </div>
                
                <div class="cart-summary">
                    <h2>RÉCAPITULATIF</h2>
                    <div class="summary-details">
                        <div class="summary-row">
                            <span>Sous-total</span>
                            <span class="subtotal">0,00€</span>
                        </div>
                        <div class="summary-row">
                            <span>Livraison</span>
                            <span class="shipping">Calculé à l'étape suivante</span>
                        </div>
                        <div class="summary-row total">
                            <span>Total</span>
                            <span class="total-price">0,00€</span>
                        </div>
                    </div>
                    
                    <div class="coupon-form">
                        <label for="coupon">Code promo</label>
                        <div class="coupon-input">
                            <input type="text" id="coupon" placeholder="Entrez votre code">
                            <button class="btn btn-secondary">Appliquer</button>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary checkout-btn">Passer la commande</button>
                    
                    <div class="secure-payment">
                        <i class="fas fa-lock"></i>
                        <span>Paiement sécurisé</span>
                        <div class="payment-methods">
                            <i class="fab fa-cc-visa"></i>
                            <i class="fab fa-cc-mastercard"></i>
                            <i class="fab fa-cc-paypal"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- 
<section class="recommended-products">
        <div class="container">
            <h2>VOUS POURRIEZ AIMER</h2>
            <div class="product-slider">
                <div class="slider-track">
                    <div class="slider-item">
                        <img src="assets/beers/manava.png" alt="HibisKiSS Manava" loading="lazy">
                        <h3>MANAVA</h3>
                        <p>5,50€</p>
                        <button class="btn btn-secondary add-to-cart" data-beer="manava">Ajouter</button>
                    </div>
                    <div class="slider-item">
                        <img src="assets/beers/moana.png" alt="HibisKiSS Moana" loading="lazy">
                        <h3>MOANA</h3>
                        <p>6,20€</p>
                        <button class="btn btn-secondary add-to-cart" data-beer="moana">Ajouter</button>
                    </div>
                    <div class="slider-item">
                        <img src="assets/beers/tade.png" alt="HibisKiSS Tade" loading="lazy">
                        <h3>TADE</h3>
                        <p>6,80€</p>
                        <button class="btn btn-secondary add-to-cart" data-beer="tade">Ajouter</button>
                    </div>
                    <div class="slider-item">
                        <img src="assets/beers/tama.png" alt="HibisKiSS Tama" loading="lazy">
                        <h3>TAMA</h3>
                        <p>7,50€</p>
                        <button class="btn btn-secondary add-to-cart" data-beer="tama">Ajouter</button>
                    </div>
                </div>
                <div class="slider-nav">
                    <button class="slider-dot active"></button>
                    <button class="slider-dot"></button>
                </div>
            </div>
        </div>
    </section>
-->