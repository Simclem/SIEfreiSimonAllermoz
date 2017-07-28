
<?php
  require_once("../PHP/dbFunctions.php");


  if(empty($_POST['nameAlbum'])) 
  {
    print("{'result': 'false'}");
  }
  else {
    //insertEvent($_POST['nameEvent'],$_POST['Descr'],$_POST['dateE'],$_POST['HeureE'],$_POST['Duree'],$_POST['url']);
    insertAlbum($_POST['nameAlbum']);
  }

?>
