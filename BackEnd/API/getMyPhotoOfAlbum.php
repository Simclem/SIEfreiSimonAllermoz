<?php
  require_once("../PHP/dbFunctions.php");

if(empty($_GET['idAlbum']))
{
  print(0);
}
else {



  $returnResult = getPhotosOfThisAlbum($_GET['idAlbum']);
  $json = json_encode($returnResult);
  print($json);
}

?>
