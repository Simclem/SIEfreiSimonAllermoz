
<?php
  require_once("../PHP/dbFunctions.php");


  if((empty($_POST['ide'])) ||(empty($_POST['idu'])))
  {
    print("{'result': 'false'}");
  }
  else {
    insertAssoc($_POST['idu'],$_POST['ide']);
  }

?>
