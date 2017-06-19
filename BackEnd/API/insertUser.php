<?php
  require_once("../PHP/dbFunctions.php");

  var_dump($_GET);
  if((empty($_GET['nom'])) ||(empty($_GET['prenom']))||(empty($_GET['add'])) ||(empty($_GET['NumLicense']))  ||(empty($_GET['pass']))     )
  {

  }
  else {
    insertUser($_GET['nom'],$_GET['prenom'],$_GET['add'],$_GET['NumLicense'],$_GET['pass']);
  }

?>
