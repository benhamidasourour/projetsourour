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
 
   /* if(isset($_GET["login"])&& isset($_GET["mp"]))
     {
        // Le login est-il rempli ?
        if (empty($_GET['login']))
         {
             $message = 'Veuillez indiquer votre login svp !';
    
          }
         // Le mot de passe est-il rempli ?
        elseif(empty($_GET['mp']))
        {
            $message = 'Veuillez indiquer votre mot de passe svp !';
        }
      // Le login est-il correct ?
         elseif($_GET['login'] !== LOGIN)
        {
         $message = 'Votre login est erroné !';
         }
      // Le mot de passe est-il correct ?
      elseif($_GET['mp'] !== PASSWORD)
        {
          $message = 'Votre mot de passe est erroné !';
         }
      else
       {
      // L'identification a réussi
      $message = 'Bienvenue '. LOGIN .' ! vous êtes connecté';
        }
     }
  else
    { $message="utilisation incorrecte";
      header('location: authentification-s.html');
    }
    echo $message;
    */
/**************************************************** */
// version simplifié
/**************************************************** */
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