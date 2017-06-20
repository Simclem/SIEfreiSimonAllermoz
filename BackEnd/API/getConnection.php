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

    session_start();

    $_SESSION["IdUser"] = $returnResult[0]["IdUser"];
    $_SESSION["Prenom"] = $returnResult[0]["Prenom"];
    $_SESSION["AdresseMail"] = $returnResult[0]["AdresseMail"];
    $_SESSION["isAdmin"] = $returnResult[0]["isAdmin"];
  }
}



?>
