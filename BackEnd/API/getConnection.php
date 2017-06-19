<?php
  require_once("../PHP/dbFunctions.php");

if(empty($_POST['login'])  || empty($_POST['password'])  )
{
  print(false);
}
else {
  getUserByMailAndPass($_POST['login'], $_POST['password']);
}

?>
