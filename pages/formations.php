<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/btn-menu.js" defer></script>
</head>

<body id="top">
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
                    <li><a href="formations.php" class="active">Formations</a></li>
                    <li><a href="tutoriels.php">Tutoriels</a></li>
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
    <section class="banner2">
        <div class="banner2-title">
            <h1>Formations</h1>
            <p>
                Formez-vous de façon professionnelle et gratuitement
            </p>
        </div>
    </section>
    <main class="main-container main-formations">
        <section class="formations-web">
            <div class="formations-title">
                Apprenez le developpement web
            </div>
            <div class="line">
                <div class="formations-items">
                    <img src="../Images/html5.svg" alt="html5-logo">
                    <div class="formations-btn">
                        <div class="items-title">
                            Apprendre L'HTML5
                        </div>
                        <div class="cards-btn cards-btn-f">
                            <a href="pages-formations/formation-html.php">Voir La formation</a>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed
                    </p>
                </div>
                <div class="formations-items">
                    <img src="../Images/css3.svg" alt="css3-logo">
                    <div class="formations-btn">
                        <div class="items-title">
                            Apprendre le CSS3
                        </div>
                        <div class="cards-btn cards-btn-f">
                            <a href="formation-css.php">Voir La formation</a>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed
                    </p>
                </div>
                <div class="formations-items">
                    <img src="../Images/js.svg" alt="javascript-logo">
                    <div class="formations-btn">
                        <div class="items-title">
                            Apprendre le JAVASCRIPT
                        </div>
                        <div class="cards-btn cards-btn-f">
                            <a href="formation-js.php">Voir La formation</a>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed
                    </p>
                </div>
                <div class="formations-items f-items-double">
                    <div class="nodejs-items">
                        <img src="../Images/node-js.svg" alt="nodejs-logo">
                    <div class="formations-btn">
                        <div class="items-title">
                            Node JS
                        </div>
                        <div class="cards-btn cards-btn-f">
                            <a href="formation-js.php">Voir</a>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                    </p>
                    </div>
                    <div class="jquery-items">
                        <img src="../Images/jquery.svg" alt="jquery-logo">
                    <div class="formations-btn">
                        <div class="items-title">
                            JQuery
                        </div>
                        <div class="cards-btn cards-btn-f">
                            <a href="formation-js.php">Voir</a>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                    </p>
                    </div>
                </div>
                <div class="formations-items">
                    <img src="../Images/php.svg" alt="php-logo">
                    <div class="formations-btn">
                        <div class="items-title">
                            Apprendre le PHP
                        </div>
                        <div class="cards-btn cards-btn-f">
                            <a href="formation-php.php">Voir La formation</a>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed
                    </p>
                </div>
                <div class="formations-items">
                    <img src="../Images/sql.svg" alt="mysql-logo">
                    <div class="formations-btn">
                        <div class="items-title">
                            Apprendre MySQL
                        </div>
                        <div class="cards-btn cards-btn-f">
                            <a href="formation-sql.php">Voir La formation</a>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed
                    </p>
                </div>
            </div>
        </section>
        <section class="fomations-sup">
            <div class="formations-title f-title">
                Formations Supplémentaires
            </div>
            <div class="line">
                <div class="formations-items line-sup">
                    <img src="../Images/java.svg" alt="java-logo" width="64px" height="64px">
                    <div class="formations-btn">
                        <div class="items-title">
                            Apprendre le JAVA
                        </div>
                        <div class="cards-btn cards-btn-f">
                            <a href="formation-java.php">Voir La formation</a>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed
                    </p>
                </div>
                <div class="formations-items line-sup">
                    <img src="../Images/c.svg" alt="c-logo">
                    <div class="formations-btn">
                        <div class="items-title">
                            Apprendre le C
                        </div>
                        <div class="cards-btn cards-btn-f">
                            <a href="formation-c.php">Voir La formation</a>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed
                    </p>
                </div>
                <div class="formations-items line-sup">
                    <img src="../Images/pascal.svg" alt="pascal-logo" class="middle-line">
                    <div class="formations-btn">
                        <div class="items-title">
                            Apprendre le PASCAL
                        </div>
                        <div class="cards-btn cards-btn-f">
                            <a href="formation-pascal.php">Voir La formation</a>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed
                    </p>
                </div>//////
                <div class="formations-items line-sup">
                    <img src="../Images/c-sharp.svg" alt="c-sharp-logo">
                    <div class="formations-btn">
                        <div class="items-title">
                            Apprendre le C#
                        </div>
                        <div class="cards-btn cards-btn-f">
                            <a href="formation-c#.php">Voir La formation</a>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed
                    </p>
                </div>
            </div>
            <div class="formations-pdf ">
                <div class="f-pdf-title formations-title">
                    Formation en format PDF
                </div>
                <div class="line">
                    <div class="items-pdf">
                        <div>
                            <img src="../Images/file.svg" alt="file-logo">
                        </div>
                        <div class= "items-pdf-body">
                            <div class="tems-pdf-title">
                                Apprenez BOOSTRAP
                            </div>
                            <P>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
                            </P>
                            <div class="cards-btn cards-btn-f">
                                <a href="formation-c#.pdf">Télécharger</a>
                            </div>
                        </div>
                    </div>
                    <div class="items-pdf">
                        <div>
                            <img src="../Images/file.svg" alt="file-logo">
                        </div>
                        <div class= "items-pdf-body">
                            <div class="tems-pdf-title">
                                Apprenez BOOSTRAP
                            </div>
                            <P>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
                            </P>
                            <div class="cards-btn cards-btn-f">
                                <a href="formation-c#.pdf">Télécharger</a>
                            </div>
                        </div>
                    </div>
                    <div class="items-pdf">
                        <div>
                            <img src="../Images/file.svg" alt="file-logo">
                        </div>
                        <div class= "items-pdf-body">
                            <div class="tems-pdf-title">
                                Apprenez BOOSTRAP
                            </div>
                            <P>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
                            </P>
                            <div class="cards-btn cards-btn-f">
                                <a href="formation-c#.pdf">Télécharger</a>
                            </div>
                        </div>
                    </div>
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
                    <li><a href="formations.php" class="active">Formations</a></li>
                    <li><a href="tutoriels">Ttutoriels</a></li>
                    <li><a href="forum" class="desactive">Forum</a></li>
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