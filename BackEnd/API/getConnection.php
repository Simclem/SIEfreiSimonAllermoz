<?php
  require_once("../PHP/dbFunctions.php");

if(isset($_POST['login'])  || isset($_POST['password'])  )
{
  print("false");
}
else {
  getUserByMailAndPass($_POST['login'], $_POST['password']);
}

?>
