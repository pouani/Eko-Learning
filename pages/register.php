<?php
    require 'password.php';
    require 'db.php';

    $id = $mdp = $mail = "";
    $errorId = $errorMdp = $errorMail = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $id = verifyInput($_POST['identifiant']);
        $mdp = verifyInput($_POST['password']);
        $mail = verifyInput($_POST['email']);
        $validMessage = NULL;
        
      if(empty($id))
      {
         $errorId = "Vous n'avez pas saisie un Identifiant";
         $validMessage = true;
      }else{
          $req = $pdo->prepare('SELECT id FROM users WHERE identifiant = ?');
          $req->execute([$id]);
          $user = $req->fetch();
          if($user){
            $errorId = "Cet identifiant existe déjà";
            $validMessage = true;
          }
      }
      if(empty($mdp))
        {
            $errorMdp = "Vous n'avez pas saisie votre Mot de Passe";
            $validMessage = true;
        } if(!isPassword($mdp))
        {
        $errorMdp = "Mot de passe pas saisie ou est pas conforme !";
        $validMessage = true;
        }
        if(empty($mail))
            {
            $errorMail = "Vous n'avez pas saisie votre Email !";
            $validMessage = true;
        }else if(!isMail($mail))
        {
        $errorMail = "Email pas saisie ou incorrect !";
        $validMessage = true;
        }else{
            $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');
            $req->execute([$mail]);
            $user = $req->fetch();
            if($user){
              $errorMail = "Cet email est déjà utilisé par un autre compte ";
              $validMessage = true;
            }
        }

      if($validMessage === NULL){
          
            $req = $pdo->prepare("INSERT INTO users SET identifiant = ?, email = ?,  passworduser = ?, confirmation_token = ?");
            $password = password_hash($mdp, PASSWORD_BCRYPT);
            $token = str_random(60);
            $req-> execute([$id, $mail, $password, $token]);
            $user_id = $pdo->lastInsertId();
            mail($mail , 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://localhost:8000/Dev-web/site/pages/confirm.php?id=$user_id&token=$token");
            $_SESSION['flash']['success'] = " Un email de confirmation vous a été envoyé pour valider votre compte";
            header('Location:login.php');
            exit();

            $validMessage = NULL;
            $id = $mdp = $mail = "";
            $errorId = $errorMdp = $errorMail = "";
        }
    }
   /** fonction de sécurité */
   function isMail($var)
   {
       return filter_var($var, FILTER_VALIDATE_EMAIL);
   }
   function isPassword($var){
       return preg_match("/[a-z0-9A-Z][@._-]*/", $var);
   }
   function verifyInput($var)
    {
        $var = trim($var);
        $var = stripcslashes($var);
        $var = htmlspecialchars($var);

        return $var;
    }
    function str_random($lenght){
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return substr(str_shuffle(str_repeat($alphabet, $lenght)), 0, $lenght);
    }

?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>S'inscrire</title>
</head>
<body id="top" class="login-body">
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
                    <a href="register.php" class="active">S'inscrire</a>
                    <a href="login.php">Se connecter</a>
                <?php endif; ?>
            </div>
        </div>
                <div class="bars ">
                    <span class="burger"></span>
                </div>
    </header>
    <section class="login-form login-account">
        <div class="form">
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="form" >

                <div class="form-header">
                    S'inscrire
                    <hr>
                </div>
                <!--
                <?php /*
                <div class="form-control form-label">
                    <label for="nom">Nom</label><br>
                    <input type="text" name="nom" id="nom" class="nom" value = "<?=$nom?>" >
                </div>
                <span class="error <?php if($validMessage){ echo 'errorMsg'; } ?>"><?= $errorNom?></span>
                */
                ?>
                -->
                <div class="form-control form-label">
                    <label for="id">Pseudo</label><br>
                    <input type="text" name="identifiant" id="id" class="id" placeholder = "Exemple : Doe145" value ="<?=$id?>" >
                </div>
                <span class="error <?php if($validMessage){ echo 'errorMsg'; }?>"><?= $errorId?></span>
                <div class="form-control form-label">
                    <label for="email">Mail</label><br>
                    <input type="email" name="email" id="email" class ="email" value ="<?=$mail?>" >
                </div>
                <span class="error <?php if($validMessage){ echo 'errorMsg'; } ?>"><?= $errorMail?></span>
                <div class="form-control form-label">
                    <label for="password">Mot de passe</label><br>
                    <div class="password">
                        <input type="<?= $MdpType;?>" name="password" id="password" class=" password1 password-visibility" value ="<?=$mdp?>" >
                        <label for="password" class="eye"></label>
                    </div>
                </div>
                <span class="error <?php if($validMessage){ echo 'errorMsg'; }?>"><?= $errorMdp?></span>
                <div class="form-control connect ">
                    <p>Vous avez déjà un compte ? connectez-vous <a href="register.php" class="btn-account">Ici</a></p>
                </div>
                <div class="btn">
                    <button type="submit" class="btn1">M'inscrire</button>
                </div>
            </form>
        </div>
    </section>
    <script src="../js/btn-menu.js" defer></script>
    <script src="../js/formValidate.js" defer></script>
</body>
</html>
