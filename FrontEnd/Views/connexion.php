<?php
    include ("./Components/header.php");
?>

<div class="row">
    <form>
        <div class="col-md-offset-5 col-md-2">
            <label for="identifiantConnexion">Identifiant</label>
            <input type="text" class="form-control" id="identifiantConnexion" placeholder="Entrer votre identifiant"><br>
        </div>
        <div class="col-md-offset-5 col-md-2">
            <label for="motDePasseConnexion">Mot de passe</label>
            <input type="password" class="form-control" id="motDePasseConnexion" placeholder="Entrer votre mot de passe"><br>
        </div>
        <div class="col-md-offset-5 col-md-2">
            <button type="submit" class="btn btn-primary">Se Connecter</button>
        </div>
    </form>
</div>
<div class="row">

</div>

<?php
    include ("./Components/footer.php");
?>
