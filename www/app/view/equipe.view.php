    <main>
    <div class="page-hero" style="background-image: url('assets/background/team-bg.jpg');">
        <div class="container">
            <h1>QUI SOMMES-NOUS?</h1>
            <p>Découvrez l'équipe passionnée derrière HibisKiSS</p>
        </div>
    </div>

    <div class="team-intro">
        <div class="container">
            <h2>NOTRE ÉQUIPE</h2>
            <div class="separator"></div>
            <p>HibisKiSS c'est avant tout une histoire de passionnés. Notre équipe réunit des talents complémentaires, tous animés par l'amour du brassage artisanal et la volonté de créer des bières exceptionnelles.</p>
        </div>
    </div>

    <div class="team-members" class="MMI">
        <div class="container">
            <div class="team-grid">
                <?php foreach ($equipes as $equipe):?>
                    <div class="team-member">
                        <div class="member-image">
                            <a href=""><img src="public/images/equipe/<?= $equipe['image_profil']?>" alt="<?= $equipe['nom']?>" loading="lazy"></a> 
                            <div class="social-links">
                                <a href="<?= $equipe['linkedin_url']?>"><i class="fab fa-linkedin"></i></a>
                                <a href="<?= $equipe['instagram_url']?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <a href="">                            
                            <h3><?= $equipe['prenom']?> <?= $equipe['nom']?></h3>
                            <p class="classe"><?= $equipe['classe']?></p>
                            <p class="bio"><?= $equipe['description']?></p></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <div class="team-members" class="GB">
        <div class="container">
            <div class="team-grid">
                <?php foreach ($GB as $GBequipe):?>
                    <div class="team-member">
                        <div class="member-image">
                            <a href=""><img src="public/images/equipe/<?= $GBequipe['image_profil']?>" alt="<?= $GBequipe['nom']?>" loading="lazy"></a> 
                            <div class="social-links">
                                <a href="<?= $GBequipe['linkedin_url']?>"><i class="fab fa-linkedin"></i></a>
                                <a href="<?= $GBequipe['instagram_url']?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <a href="">                            
                            <h3><?= $GBequipe['prenom']?> <?= $GBequipe['nom']?></h3>
                            <p class="classe"><?= $GBequipe['classe']?></p>
                            <p class="bio"><?= $GBequipe['description']?></p></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    </main>