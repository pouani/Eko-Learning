<?php
   $nom = $id = $mdp = $mail = "";
   $errorNom = $errorId = $errorMdp = $errorMail = "";
   
   if(isset($_POST))
   {
      $nom = verifyInput($_POST['nom']);
      $id = verifyInput($_POST['identifiant']);
      $mdp = verifyInput($_POST['password']);
      $mail = verifyInput($_POST['email']);

      if(empty($nom))
      {
         $errorNom = "Vous n'avez pas saisie votre Nom";
      }
      if(empty($id))
      {
         $errorId = "Vous n'avez pas saisie un Identifiant";
      }
      if(empty($mdp))
      {
         $errorMdp = "Vous n'avez pas saisie un Mot de Passe";
      }
      if(empty($mail))
      {
         $errorMail = "Vous n'avez pas saisie votre Email";
      }
   }

   /** fonction de sécurité */
   function verifyInput($var)
    {
        $var = trim($var);
        $var = stripcslashes($var);
        $var = htmlspecialchars($var);

        return $var;
    }

?>




