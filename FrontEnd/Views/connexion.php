<?php
    include ("./Components/header.php");

    if (!empty($_SESSION["IdUser"])){
        echo "<script>alert(\"Vous êtes déja connecté.\")</script>";
        echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
    }
?>

<div class="row">
    <div class="container-fluid">
        <div class="col-md-offset-4 col-md-4">
            <div class="alert alert-success" role="alert" id="displayConnect" style="display: none; text-align: center">Vous êtes connecté.</div>
            <div class="alert alert-danger" role="alert" id="displayError" style="display: none; text-align: center">Erreur lors de la connexion.</div>
        </div>
    </div>

  <div class="resultat" id ="toHide">
        <div class="col-md-offset-5 col-md-2">
            <label for="identifiantConnexion">Identifiant</label>
            <input type="email" class="form-control" id="identifiantConnexion" placeholder="Entrer votre adresse e-mail" required="required"><br>
        </div>
        <div class="col-md-offset-5 col-md-2">
            <label for="motDePasseConnexion">Mot de passe</label>
            <input type="password" class="form-control" id="motDePasseConnexion" placeholder="Entrer votre mot de passe"required="required"><br>
        </div>
        <div class="col-md-offset-5 col-md-2">
            <button type="submit" class="btn btn-primary" id="submit">Se Connecter</button>
        </div>
  </div>

</div>

<script>
    $(document).ready(function(){
        $("#submit").click(function(){
          console.log('http://localhost/SIEfrei/SIEfreiSimonAllermoz/BackEnd/API/getConnection.php?login='+document.getElementById('identifiantConnexion').value+'&password='+document.getElementById('motDePasseConnexion').value);
          $.ajax({
            url :'../../BackEnd/API/getConnection.php?login='+document.getElementById('identifiantConnexion').value+'&password='+document.getElementById('motDePasseConnexion').value,
            type : 'GET',
            dataType:'json',
            success : function(data)
            {
              console.log(data);
              if(data == 0)
              {
                  document.getElementById('displayError').style.display = 'block';
                  document.getElementById('displayConnect').style.display = 'none';
                  document.getElementById('toHide').style.display = 'block';
              }
              else
              {
                  document.getElementById('toHide').style.display = 'none';
                  document.getElementById('displayError').style.display = 'none';
                  document.getElementById('displayConnect').style.display = 'block';
              }
            }
          })
        });
    });
</script>

<?php
    include ("./Components/footer.php");
?>
