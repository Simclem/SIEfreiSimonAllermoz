<?php
  require_once("../PHP/dbFunctions.php");


  if((empty($_POST['nom'])) ||(empty($_POST['prenom']))||(empty($_POST['add'])) ||(empty($_POST['NumLicense']))  ||(empty($_POST['pass']))     )
  {
    print("{'result': 'false'}");
  }
  else {
    insertUser($_POST['nom'],$_POST['prenom'],$_POST['add'],$_POST['NumLicense'],$_POST['pass']);
  }

?>
