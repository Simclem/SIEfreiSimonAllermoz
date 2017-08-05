
<?php
  require_once("../PHP/dbFunctions.php");


  if((empty($_POST['link'])) ||(empty($_POST['idAlbum'])))
  {
    print("{'result': 'false'}");
  }
  else {
        if(empty($_POST['description']))
        {
            insertPhotoInAlbum($_POST['link'],$_POST['idAlbum'],'');
        }
        else
        {
            insertPhotoInAlbum($_POST['link'],$_POST['idAlbum'],$_POST['description']);

        }
  }

?>
