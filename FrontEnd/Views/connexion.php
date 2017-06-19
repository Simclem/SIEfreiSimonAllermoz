<?php
    include ("./Components/header.php");
?>

<div class="row">
  <div class="resultat">
  </div>

        <div class="col-md-offset-5 col-md-2">
            <label for="identifiantConnexion">Identifiant</label>
            <input type="email" class="form-control" id="identifiantConnexion" placeholder="Entrer votre identifiant" required="required"><br>
        </div>
        <div class="col-md-offset-5 col-md-2">
            <label for="motDePasseConnexion">Mot de passe</label>
            <input type="password" class="form-control" id="motDePasseConnexion" placeholder="Entrer votre mot de passe"required="required"><br>
        </div>
        <div class="col-md-offset-5 col-md-2">
            <button type="submit" class="btn btn-primary" id="submit">Se Connecter</button>
        </div>

</div>

<script>
    $(document).ready(function(){
        $("#submit").click(function(){
          console.log('http://localhost/SIEfrei/SIEfreiSimonAllermoz/BackEnd/API/getConnection.php?login='+document.getElementById('identifiantConnexion').value+'&password='+document.getElementById('motDePasseConnexion').value);
          $.ajax({
            url :'http://localhost/SIEfrei/SIEfreiSimonAllermoz/BackEnd/API/getConnection.php?login='+document.getElementById('identifiantConnexion').value+'&password='+document.getElementById('motDePasseConnexion').value,
            type : 'GET',
            dataType:'json',
            success : function(data)
            {
              console.log(data);
            }
          })
        });
    });
</script>

<?php
    include ("./Components/footer.php");
?>
