<?php
    include ("./Components/header.php");
?>
<script type = "text/javascript" src="../Script/ScriptAlbum.js"></script>
<div class="row">
  <div class="container-fluid">
      <div class="col-md-offset-4 col-md-4">
          <div class="alert alert-success" role="alert" id="displayConnect" style="display: none; text-align: center">Vous êtes inscrit à l'évenement.</div>
          <div class="alert alert-danger" role="alert" id="displayError" style="display: none; text-align: center">Vous n'êtes pas connectés, impossible de vous inscrire.</div>
      </div>
  </div>
    <div class="container-fluid">

        <div class="col-md-offset-2 col-md-8">
            <h3 style="text-align: center"><b> Les Albums </b></h3>
            </br></br></br>
        </div>
        <?php
          if (!empty($_SESSION["isAdmin"]))
          {
            if ($_SESSION["isAdmin"] == 1){
                ?>
                <div class="col-md-2" style="text-align: center">
                    <a class="btnCreateEvent" href="creerEvenement.php"><button  type="button" class="btn btn-primary"> Créer un album </button></a></br></br>
                  <!--  <a class="btnCreateEvent" href="modifierEvenement.php"><button type="button" class="btn btn-primary"> Modifier un évènement </button></a>-->
                </div>
                <?php
            }
          }

        ?>
    </div>
</div>

<div class="row">
  <div class="container-fluid">
    <div class="col-md-offset-1 col-md-10">
      <div class="panel panel-default">
      <div class="panel-body">

    <table class="table">
      <tr>
        <td style="border-top:  none;">
          Numéro de l'album
        </td>
        <td style="border-top:  none;">
          Titre
        </td>
      </tr>
    </table>
  </div>
  </div>
</div>





</div>
</div>





<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <h3 style="text-align: center"><b> En Construction ... </b></h3>
            </br></br>
        </div>
    </div>
</div>

<?php
    include ("./Components/footer.php");
?>
