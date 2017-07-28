<?php
    include ("./Components/header.php");
?>
<script  type="text/javascript" src ="../Script/ScriptInsertAlbum.js"></script>
<div class="col-md-offset-4 col-md-4">
    <div class="alert alert-success" role="alert" id="displayConnect" style="display: none; text-align: center">Votre évènement a été ajouté.</div>
</div>
<div class="row" id="toHide">

  <div class="col-md-offset-5 col-md-2">
      <label for="Nom">Titre de l'album</label>
      <input type="text" class="form-control" id="Titre" placeholder="Entrer le nom de l'album" required="required"><br>
  </div>
  <div class="col-md-offset-5 col-md-2">
      <button type="submit" class="btn btn-primary" id="submit" onclick="insertAlbum()">S'inscrire</button>
  </div>
</div>
<?php
    include ("./Components/footer.php");
?>
