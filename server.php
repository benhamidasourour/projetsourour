
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST["nom"])&&isset($_POST["prenom"]))
   {  
      if (!empty($_POST["nom"])&&!empty($_POST["prenom"]))
      {var_dump($_POST);
       echo $_SERVER["QUERY_STRING"].'<br>';
       echo $_SERVER['PHP_SELF']. '<br>';
       echo $_SERVER["SERVER_NAME"].'<br>';
       echo $_SERVER["SERVER_ADDR"].'<br>';
       echo $_SERVER["REMOTE_ADDR"].'<br>';
       echo $_SERVER["SERVER_PORT"].'<br>';
       echo $_SERVER["HTTP_REFERER"].'<br>';
       echo $_SERVER["DOCUMENT_DIR"].'<br>';
      } 
    }
?>
<form  method ="post">
    Nom :<input type="text" name="nom" id="">
    Prenom :<input type="text" name="prenom" id="">
    <input type="submit"  value="envoyer">

</form>
    
</body>
</html>