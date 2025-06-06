    <main class="container">
        <div class="beer-hero">
            <div class="beer-image-container">
                <img src="public/images/bieres/<?= $biere['image_url']?>" alt="Ambrée des Cimes" class="beer-image floating">
            </div>
            
            <div class="beer-details">
                <span class="beer-badge">Nouveau</span>
                <h1 class="beer-title"><?= $biere['nom']?></h1>
                <p class="beer-subtitle"><?= $biere['type']?></p>
                
                <div class="beer-meta">
                    <div class="meta-item">
                        <div class="meta-value">5%</div>
                        <div class="meta-label">Alcool</div>
                    </div>
                    <div class="meta-item">
                       
                    </div>
                    <div class="meta-item">
                        <div class="meta-value">75 CL</div>
                        <div class="meta-label">Format</div>
                    </div>
                </div>
                
                <p class="beer-description">
                    <?= $biere['description']?>
                </p>
                
                <div class="beer-tasting">
                    <h3 class="tasting-title">Notes de dégustation</h3>
                    <div class="tasting-notes">
                        <span class="tasting-note">Caramel</span>
                        <span class="tasting-note">Pain grillé</span>
                        <span class="tasting-note">Fruits secs</span>
                        <span class="tasting-note">Équilibre</span>
                        <span class="tasting-note">Rondeur</span>
                    </div>
                </div>
                
                <div class="beer-price-container">
                    <div class="quantity-selector">
                        <button class="quantity-btn minus">-</button>
                        <span class="quantity-value">1</span>
                        <button class="quantity-btn plus">+</button>
                    </div>
                    <div class="price"><?= $biere['prix']?></div>
                    <button class="add-to-cart">
                        <i class="fas fa-cart-plus"></i>
                        Ajouter au panier
                    </button>
                </div>
            </div>
        </div>
    </main>