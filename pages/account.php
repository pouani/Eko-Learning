<?php
require 'password.php';
?>
<?php if (isset($_SESSION['flash'])) : ?>
    <?php foreach ($_SESSION['flash'] as $type => $message) : ?>
        <div class="alert alert-<?= $type; ?>">
            <?= $message; ?>
        </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Tutoriels</title>
    <script src="../js/btn-menu.js" defer></script>
</head>

<body id="top" class="tutoriels">
    <header class="hero-bar">
        <div class="header__nav">
            <div class="logo">
                <a href="../index.php">
                    <img src="../images/logo.svg">
                </a>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="formations.php">Formations</a></li>
                    <li><a href="tutoriels.php" class="active">Tutoriels</a></li>
                    <li><a href="forum.php" class="desactive">Forum</a></li>
                </ul>
            </nav>
        </div>
        <div class="header__social">
            <div class="search">
                <form class="search-bar">
                    <input type="search" id="search" name="search-bar" placeholder="Search something...">
                    <label for="search">
                    </label>
                </form>
            </div>
            <div class="login">
                <?php if (isset($_SESSION['auth'])) : ?>
                    <a href="logout.php" class="active">Se deconnecter</a>
                <?php else : ?>
                    <a href="register.php" class="active">S'inscrire</a>
                    <a href="login.php">Se connecter</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="bars ">
            <span class="burger"></span>
        </div>
    </header>
    <footer class="footer">
        <div class="foot">
            <div class="f-logo">
                <a href="../index.php">
                    <img src="../images/logo.svg">
                </a>
            </div>
            <div class="f-link">
                <h3>
                    Liens rapides
                </h3>
                <ul class="footer-nav">
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="formations.php">Formations</a></li>
                    <li><a href="tutoriels.php" class="active">Ttutoriels</a></li>
                    <li><a href="forum.php" class="desactive">Forum</a></li>
                </ul>
            </div>
            <div class="top">
                <h3>
                    Monter
                </h3>
                <div class="topbtn">
                    <a href="#top" class="top-btn">
                        Remonter
                    </a>
                </div>
            </div>
            <div class="f-contact">
                <h3>
                    Nous contacter
                </h3>
                <div class="f-icone">
                    <a href="#"><img src="../Images/whatsapp-square-1.svg" alt="whatsapp-icone"></a>
                    <a href="#"><img src="../Images/telegram-1.svg" alt="telegram-icone"></a>
                    <a href="#"><img src="../Images/discord.svg" alt="discord-icone"></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>
                Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce.
            </p>
        </div>
    </footer>
</body>

</html>