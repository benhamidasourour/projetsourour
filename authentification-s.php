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
 // Si les champs login et mp sont définis alors le formulaire a été envoyé
if(isset($_GET["login"],$_GET["mp"]))
{ if ($_GET['login'] == LOGIN && $_GET['mp'] == PASSWORD)
      $message = 'Bienvenue '. LOGIN .' ! vous êtes connecté';

    else
     { 
      header('location: authentification-s.html'); //redirection vers le formulaire 
     }
}
  else
  $message="utilisation incorrecte";

echo $message;
?>