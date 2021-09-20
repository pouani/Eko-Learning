<?php session_start()?>
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
    <section class="banner3">
        <div class="banner2-title">
            <h1>Tutoriels</h1>
            <p>
                Faites votre choix dans notre large catalogue de tutoriels
            </p>
            <h2 class="text">Tutoriels</h2>
        </div>
    </section>
    <section class="title-tutoriels">
        <header class="main-header">
            <h2>Tutoriels</h2>
            <h2 class = tuto-nbre>133 Videos</h2>
        </header>
    </section>
    <hr>
    <main class="main-tutoriels">
        <section class="cards-tutoriels">
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="cards-video">
                    <video controls="controls">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="cards ">
                <div class="cards-video">
                    <video controls="controls" ">
                        <source src="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">
                    </video>
                </div>
                <div class="cards-content">
                    <div class="cards-logo"></div>
                    <div class="cards-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vel incidunt iusto unde in neque voluptatibus.
                        </p>
                    </div>
                    <div class="cards-btn">
                        <a href="../images/videos/Tutoriel JavaScript _ Loader animé.mp4">Télécharger</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
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