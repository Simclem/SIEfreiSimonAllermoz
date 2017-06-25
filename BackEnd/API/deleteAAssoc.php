
<?php
  require_once("../PHP/dbFunctions.php");


  if((empty($_GET['idu'])) ||(empty($_GET['ide'])))
  {
    print("{'result': 'false'}");
  }
  else {
    deleteanAssoc($_GET['idu'],$_GET['ide']);
  }

?>
