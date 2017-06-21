
<?php
  require_once("../PHP/dbFunctions.php");


  if((empty($_GET['idu'])) ||(empty($_GET['ide'])))
  {
    print("{'result': 'false'}");
  }
  else {
    deleteanAssoc($_GET['ide'],$_GET['idu']);
  }

?>
