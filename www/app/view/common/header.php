<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIBISKiSS - Accueil</title>
    <link rel="icon" type="image/png" href="public/images/logoHIBISKiSS.png">
    <link rel="stylesheet" href="public/css/<?= $css ?>">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/header.css">

    <script src="public/js/main.js" defer></script>
    <script src="public/js/popup.js" defer></script>
    <script src="public/js/<?= $js ?>" defer></script>
    <script src="public/js/home.js" defer></script>


    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Grenze+Gotisch:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Tuffy:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="main-header">
        <div class="header-container">
            <div class="logo">
                <a href="index.php"><img src="public/images/LogoHibiskisstext.png" alt="HibisKiSS Logo"></a>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php" class="<?= isset($_GET['route']) ? '' : 'active' ?>">Accueil</a></li>
                    <li><a href="index.php?route=nosBieres" class="<?= isset($_GET['route']) && $_GET['route'] == 'nosBieres' ? 'active' : '' ?>">Nos Bières</a></li>
                    <li><a href="index.php?route=brassage" class="<?= isset($_GET['route']) && $_GET['route'] == 'brassage' ? 'active' : '' ?>">Brassage</a></li>
                    <li><a href="index.php?route=equipe" class="<?= isset($_GET['route']) && $_GET['route'] == 'equipe' ? 'active' : '' ?>">Qui sommes-nous?</a></li>
                    <li><a href="index.php?route=contact" class="<?= isset($_GET['route']) && $_GET['route'] == 'contact' ? 'active' : '' ?>">Contact</a></li>
                    <li class="cart-icon" class="<?= isset($_GET['route']) && $_GET['route'] == 'contact' ? 'active' : '' ?>"><a href="index.php?route=panier"><i class="fas fa-shopping-cart"></i> <span class="cart-count"><?=array_sum($_SESSION['panier'])?></span></a></li>
                </ul>
            </nav>
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>