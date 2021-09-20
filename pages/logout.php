<?php 
    session_start();
    unset($_SESSION['auth']);
    $_SESSION['flash']['success'] = "Vous ête maintenant deconnecter !";
    header('Location: login.php');
