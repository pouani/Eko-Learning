<?php
include 'password.php';
    if(!empty($_POST) && !empty($_POST['identifiant']) && !empty($_POST['password'])){
        require_once 'db.php';
        $req = $pdo->prepare('SELECT * FROM users WHERE (identifiant = identifiant OR email = identifiant) AND confirmed_at IS NOT NULL');
        $req->execute(['identifiant' => $_POST['identifiant']]);
        $user = $req->fetch();
        echo print_r($user);
        if(password_verify($_POST['password'], $user->passworduser)){
            $_SESSION['auth'] = $user;
            $_SESSION['flash']['success'] = 'Vous ête connecter';
            header('Location : account.php');
            exit();
        }else{
            $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrect';
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Se connecter</title>
</head>

<body id="top" class="login-body">
    <?php if (isset($_SESSION['flash'])) : ?>
        <?php foreach ($_SESSION['flash'] as $type => $message) : ?>
            <div class="alert alert-<?= $type; ?>">
                <?= $message; ?>
            </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
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
                    <li><a href="tutoriels.php">Tutoriels</a></li>
                    <li><a href="forum.php" class="desactive">Forum</a></li>
                </ul>
            </nav>
        </div>
        <div class="header__social">
            <div class="search">
                <form class="search-bar">
                    <input type="search" id="search" name="search-bar" placeholder="Search something....">
                    <label for="search">
                    </label>
                </form>
            </div>
            <div class="login">
                <?php if (isset($_SESSION['auth'])) : ?>
                    <a href="logout.php" class="active">Se deconnecter</a>
                <?php else : ?>
                    <a href="register.php">S'inscrire</a>
                    <a href="login.php" class="active">Se connecter</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="bars ">
            <span class="burger"></span>
        </div>
    </header>
    <section class="login-form">
        <div class="form">
            <form action="" method="POST" class="form">
                <div class="form-header">
                    Se connecter
                    <hr>
                </div>
                <div class="form-control form-label">
                    <label for="id">Identifiant ou email</label><br>
                    <input type="text" name="identifiant" id="id" class="id">
                </div>
                <span class="error1"></span>
                <div class="form-control form-label">
                    <label for="password">Mot de passe</label><br>
                    <div class="password">
                        <input type="<?= $MdpType; ?>" name="password" id="password" class=" password1 password-visibility">
                        <label for="password" class="eye"></label>
                    </div>
                    <span class="error2"></span>
                </div>
                <div class="form-control">
                    <input type="checkbox" name="browser" id="browser" class="browser">
                    <label for="browser" class="browse"></label>
                    <label for="browser" class="remenber">Se souvenir de moi ?</label>
                </div>
                <div class="form-control connect ">
                    <p>Vous n'avez pas de compte ? s'inscrire <a href="register.php" class="btn-account">Ici</a></p>
                </div>
                <div class="btn">
                    <button type="submit" class="btn1">Connexion</button>
                </div>
            </form>
        </div>
    </section>
    <script src="../js/btn-menu.js" defer></script>
    <script src="../js/form2Validate.js" defer></script>
</body>

</html>