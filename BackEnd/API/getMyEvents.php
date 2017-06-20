<?php
  require_once("../PHP/dbFunctions.php");

if(empty($_GET['idU']))
{
  print(0);
}
else {



  $returnResult = getMyEvent($_GET['idU']);
  $json = json_encode($returnResult);
  print($json);
}

?>
