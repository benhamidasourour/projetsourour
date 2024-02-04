<?php
/*****************************************
  *  Constantes et variables
  *****************************************/
  define('LOGIN','admin');  // Login correct
  define('PASSWORD','admin');  // Mot de passe correct
  $message = '';      // Message à afficher à l'utilisateur
 
  /*****************************************
  *  Vérification du formulaire
  *****************************************/
  // Si le tableau $_POST existe alors le formulaire a été envoyé
  var_dump($_GET);
  if(!empty($_GET))
  {
    // Le login est-il rempli ?
    if(empty($GET['login']))
    {
      $message = 'Veuillez indiquer votre login svp !';
    }
      // Le mot de passe est-il rempli ?
      elseif(empty($GET['mp']))
    {
      $message = 'Veuillez indiquer votre mot de passe svp !';
    }
      // Le login est-il correct ?
      elseif($GET['login'] !== LOGIN)
    {
      $message = 'Votre login est erroné !';
    }
      // Le mot de passe est-il correct ?
      elseif($GET['mp'] !== PASSWORD)
    {
      $message = 'Votre mot de passe est erroné !';
    }
      else
    {
      // L'identification a réussi
      $message = 'Bienvenue '. LOGIN .' !';
    }
  }
  else
  $message="formulaire non validé";
echo $message;
?>