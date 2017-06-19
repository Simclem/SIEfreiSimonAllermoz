<?php
    include ("./Components/header.php");
?>
<div class="row">
  <div class="resultat">
  </div>

  <div class="col-md-offset-5 col-md-2">
      <label for="Nom">Nom</label>
      <input type="text" class="form-control" id="Nom" placeholder="Entrer votre nom" required="required"><br>
  </div>
  <div class="col-md-offset-5 col-md-2">
      <label for="Prenom">Prenom</label>
      <input type="text" class="form-control" id="Prenom" placeholder="Entrer votre prenom" required="required"><br>
  </div>
  <div class="col-md-offset-5 col-md-2">
      <label for="Adressee-mail">Adresse e-mail</label>
      <input type="email" class="form-control" id="Adressee-mail" placeholder="Entrer votre adresse e-mail" required="required"><br>
  </div>
  <div class="col-md-offset-5 col-md-2">
      <label for="numL">Numéro de license</label>
      <input type="text" class="form-control" id="numL" placeholder="Entrer votre numéro license" required="required"><br>
  </div>
  <div class="col-md-offset-5 col-md-2">
      <label for="motDePasseConnexion">Mot de passe</label>
      <input type="password" class="form-control" id="motDePasseConnexion" placeholder="Entrer votre mot de passe"required="required"><br>
  </div>
  <div class="col-md-offset-5 col-md-2">
      <button type="submit" class="btn btn-primary" id="submit">S'inscrire</button>
  </div>

</div>

<?php
    include ("./Components/footer.php");
?>
