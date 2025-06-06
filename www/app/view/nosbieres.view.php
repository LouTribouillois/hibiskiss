<main>
        <section class="page-hero" style="background-image: url('assets/background/beer-bg.jpg');">
        <div class="container">
            <h1>NOS BIÈRES</h1>
            <p>Découvrez notre gamme exclusive de bières artisanales</p>
        </div>
    </section>

    <section class="beer-collection">
        <div class="container">
            <div class="collection-intro">
                <h2>LA GAMME HIBISKISS</h2>
                <p>L'expérience HIBISKISS commence ici</p>
            </div>


            <div class="beer-list">
                <?php foreach ($bieres as $biere):?>
                    <a href="index.php?route=biere&id=<?= $biere['id'] ?>">
                        <div class="beer-item" data-type="blonde">
                            <div class="beer-image">
                                <img src="public/images/bieres/shop/<?= $biere['background_url']?>" alt="HibisKiSS Manava" loading="lazy">
                            </div>
                            <div class="beer-info">
                                <h3><?= $biere['nom']?></h3>
                                <p><?= $biere['description']?></p>
                                <div class="beer-actions">
                                    <span class="price"><?= $biere['prix']?></span>
                                    <button class="btn btn-secondary view-details" data-beer="manava">Détails</button>
                                    <button class="btn  btn-primary add-to-cart" data-beer="manava" >Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <div class="beer-modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-body">
                <div class="modal-image" style="background-image: url('assets/beers/manava.png')"></div>
                <div class="modal-info">
                    <h2>MANAVA</h2>
                    <span class="beer-style">Blonde à l'hibiscus</span>
                    <p class="beer-description">Notre bière signature, une blonde légère et rafraîchissante avec des notes florales d'hibiscus. Parfaite pour les journées ensoleillées.</p>
                    
                    <div class="beer-specs">
                        <div class="spec-item">
                            <i class="fas fa-beer"></i>
                            <span>Alcool: 5.2%</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-tint"></i>
                            <span>IBU: 18</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-seedling"></i>
                            <span>Malt d'orge, houblon, fleurs d'hibiscus, levure</span>
                        </div>
                    </div>
                    
                    <div class="modal-actions">
                        <span class="modal-price">5,50€</span>
                        
                        <div class="quantity-selector">
                            <button class="quantity-minus"><i class="fas fa-minus"></i></button>
                            <input type="number" value="1" min="1" class="quantity-input">
                            <button class="quantity-plus"><i class="fas fa-plus"></i></button>
                        </div>
                        
                        <button class="btn btn-primary add-to-cart" data-beer="manava">Ajouter au panier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>