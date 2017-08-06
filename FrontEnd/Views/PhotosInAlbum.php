<?php 
    include('./Components/header.php');
    echo('<input type="hidden" id="idA" value ='.$_GET["idAlbum"].'>');
?>
<?php
          if (!empty($_SESSION["isAdmin"]))
          {
            if ($_SESSION["isAdmin"] == 1){
                ?>
                <div class="row">
                    <div class="col-md-2 col-md-offset-10" style="text-align: center">
                        <?php echo('<a class="btnCreateEvent" href="ajoutPhoto.php?idAlbum='.$_GET["idAlbum"].'"><button  type="button" class="btn btn-primary"> Ajouter une photo à l\'album </button></a></br></br>');?>
                    </div>  
                </div>
                <?php
            }
          }

        ?>
<div class="gallery">
</div>

<script type = "text/javascript" src="../Script/ScriptGetPhotos.js"></script>


<?php
    include('./Components/footer.php');
?>
