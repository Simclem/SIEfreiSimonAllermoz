
<?php
  require_once("../PHP/dbFunctions.php");


  if((empty($_POST['nameEvent'])) ||(empty($_POST['Descr']))||(empty($_POST['dateE'])) ||(empty($_POST['HeureE']))  ||(empty($_POST['Duree']))||(empty($_POST['url']))     )
  {
    print("{'result': 'false'}");
  }
  else {
    insertEvent($_POST['nameEvent'],$_POST['Descr'],$_POST['dateE'],$_POST['HeureE'],$_POST['Duree'],$_POST['url']);
  }

?>
