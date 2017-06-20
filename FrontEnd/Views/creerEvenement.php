<?php
    include ("./Components/header.php");
?>
<script  type="text/javascript" src ="../Script\ScriptInsertEvent.js"></script>
<div class="col-md-offset-4 col-md-4">
    <div class="alert alert-success" role="alert" id="displayConnect" style="display: none; text-align: center">Votre évènement a été ajouté.</div>
</div>
<div class="row" id="toHide">

  <div class="col-md-offset-5 col-md-2">
      <label for="Nom">Nom de l'évènement</label>
      <input type="text" class="form-control" id="Nom" placeholder="Entrer le nom de l'évènement" required="required"><br>
  </div>
  <div class="col-md-offset-5 col-md-2">
      <label for="Desc">Description</label>
      <input type="text-area" class="form-control" id="Desc" placeholder="Entrer votre description d'évenement" required="required"><br>
  </div>
  <div class="col-md-offset-5 col-md-2">
      <label for="DateEvent">Date</label>
      <input type="date" class="form-control" id="DateEvent" placeholder="Entrer la date de l'évènement" required="required"><br>
  </div>
  <div class="col-md-offset-5 col-md-2">
      <label for="HeureEvent">Heure</label>
      <input type="text" class="form-control" id="HeureEvent" placeholder="Entrer l'heure du début" required="required"><br>
  </div>
  <div class="col-md-offset-5 col-md-2">
      <label for="Duree">Durée</label>
      <input type="text" class="form-control" id="Duree" placeholder="Entrer la durée de votre évènement"required="required"><br>
  </div>
    <div class="col-md-offset-5 col-md-2">
        <label for="urlPhoto">URL de la photo</label>
        <input type="text" class="form-control" id="urlPhoto" placeholder="URL de la photo"required="required"><br>
    </div>
  <div class="col-md-offset-5 col-md-2">
      <button type="submit" class="btn btn-primary" id="submit" onclick="insertEvent()">S'inscrire</button>
  </div>
</div>
<?php
    include ("./Components/footer.php");
?>
