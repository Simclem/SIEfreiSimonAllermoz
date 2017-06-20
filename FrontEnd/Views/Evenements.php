<?php
  include ("./Components/header.php");


  if (!empty($_SESSION["IdUser"]))
  {
    echo('<input type="hidden" id="idU" value ='.$_SESSION["IdUser"].'>');
  }
  else {
    echo('<input type="hidden" id="idU" value = 0 >');
  }


?>



<div class="row">
  <div class="container-fluid">
      <div class="col-md-offset-4 col-md-4">
          <div class="alert alert-success" role="alert" id="displayConnect" style="display: none; text-align: center">Vous êtes connecté.</div>
          <div class="alert alert-danger" role="alert" id="displayError" style="display: none; text-align: center">Vous n'êtes pas connectés, impossible de vous inscrire.</div>
      </div>
  </div>
    <div class="container-fluid">

        <div class="col-md-offset-2 col-md-8">
            <h3 style="text-align: center"><b> Les évènements </b></h3>
            </br></br></br>
        </div>
        <?php
          if (!empty($_SESSION["isAdmin"]))
          {
            if ($_SESSION["isAdmin"] == 1){
                ?>
                <div class="col-md-2" style="text-align: center">
                    <a class="btnCreateEvent" href="creerEvenement.php"><button  type="button" class="btn btn-primary"> Créer un évènement </button></a></br></br>
                    <a class="btnCreateEvent" href="modifierEvenement.php"><button type="button" class="btn btn-primary"> Modifier un évènement </button></a>
                </div>
                <?php
            }
          }

        ?>
    </div>
</div>
<script  type="text/javascript" src ="../Script/ScriptEvents.js"></script>
<div class="row">
  <div class="container-fluid">
    <div class="col-md-offset-1 col-md-10">
    <table>
      <tr>
        <td>
          Numéro de l'évènement
        </td>
        <td>
          Nom de l'évènement
        </td>
        <td>
          Description
        </td>
        <td>
          Date
        </td>
        <td>
          Heure
        </td>
        <td>
          Durée
        </td>
        <td>
          Photo
        </td>
        <td>
          S'inscrire
        </td>
      </tr>
    </table>
  </div>
  </div>
</div>
<!--<div class="Content" onload="setAllEventsInATab()">
</div>-->


<?php
  include ("./Components/footer.php");
?>
