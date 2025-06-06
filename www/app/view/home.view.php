
<main>
    <div class="hero-slider">
        <div class="slider-container">
            <?php foreach ($bieres as $biere):?>
                <div class="slide " style="background-image: url('public/images/background/<?= $biere['background_url']?>');">
                    <div class="slide-content">
                        <h2 class="slide-title"><?= $biere['nom']?></h2>
                        <p class="slide-description"><?= $biere['description']?></p>
                        <a href="index.php?route=biere&id=<?= $biere['id']?>"  class="btn btn-primary">Découvrir</a>
                    </div>
                    <div class="beer-bottle">
                        <img src="public/images/bieres/<?= $biere['image_url']?>" alt="HibisKiSS Manava">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="slider-controls">
            <button class="prev-slide"><i class="fas fa-chevron-left"></i></button>
            <div class="slider-dots"></div>
            <button class="next-slide"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>

    <div class="beer-showcase">
        <div class="container">
            <h2 class="section-title">LA GAMME HIBISKISS</h2>
            <p class="section-subtitle">L'expérience HIBISKISS commence ici</p>
            <div class="beer-grid">
                <?php for ($i = 0; $i < count($biere) && $i < 3; $i++): ?>
                    <a href="index.php?route=biere&id=<?= $bieres[$i]['id'] ?>">
                        <div class="beer-item">
                            <div class="beer-image">
                                <img src="public/images/bieres/shop/<?= $bieres[$i]['background_url'] ?>" alt="HibisKiSS beer">
                            </div>
                            <div class="beer-info">
                                <h3><?= $bieres[$i]['nom'] ?></h3>
                                <p><?= $bieres[$i]['description'] ?></p>
                                <div class="beer-actions">
                                    <span class="price"><?= $bieres[$i]['prix'] ?></span>
                                    <button class="add-to-cart">Détails</button>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
            
            <div class="text-center">
                <a href="index.php?route=nosBieres" class="btn btn-secondary">Voir toute la gamme</a>
            </div>
        </div>
    </div>

    <div class="about-section">
        <div class="container">
            <h2 class="section-title">HIBISKISS</h2>
            <div class="separator"></div>
            <p class="about-text">HIBISKiSS puise son essence dans la culture tahitienne et des traditions de Tahiti, où l'hibiscus est un symbole d'hospitalité et de beauté. Notre brasserie artisanale combine ces influences tropicales avec des techniques de brassage traditionnelles européennes pour créer des bières uniques et rafraîchissantes.</p>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Do6grUhFbGg?si=reOkurpaLUMsqifq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="newsletter">
        <div class="container">
            <h3>Restez informés</h3>
            <p>Abonnez-vous à notre newsletter pour recevoir nos dernières nouveautés et offres spéciales</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Votre email" required>
                <button type="submit" class="btn btn-primary">S'abonner</button>
            </form>
        </div>
    </div>
</main>
   