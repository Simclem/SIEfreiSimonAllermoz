<?php
  require_once("../PHP/dbFunctions.php");

if(empty($_GET['login'])  || empty($_GET['password'])  )
{
  print(0);
}
else {
  $returnResult = getUserByMailAndPass($_GET['login'], $_GET['password']);
  if($returnResult == false)
  {
    print(0);
  }
  else {
    $json = json_encode($returnResult);
    print($json);
  }
}

?>
