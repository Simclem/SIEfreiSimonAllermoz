<?php
  include ("./Components/header.php");
?>
<div class="row">
    <div class="container-fluid">
        <div class="col-md-offset-2 col-md-8">
            <h3 style="text-align: center"><b> Les évènements </b></h3>
            </br></br></br>
        </div>
        <?php
            if ($_SESSION["isAdmin"] == 1){
                ?>
                <div class="col-md-2" style="text-align: center">
                    <a class="btnCreateEvent" href="creerEvenement.php"><button  type="button" class="btn btn-primary"> Créer un évènement </button></a></br></br>
                    <a class="btnCreateEvent" href="modifierEvenement.php"><button type="button" class="btn btn-primary"> Modifier un évènement </button></a>
                </div>
                <?php
            }
        ?>
    </div>
</div>
<script  type="text/javascript" src ="../Script/ScriptEvents.php"></script>
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
