<?php
    include ("./Components/header.php");
?>

<div class="row">
  <div class="resultat">
  </div>
    <form>
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
    </form>
</div>

<script>
    $(document).ready(function(){
        $("#submit").click(function(){
            $.post(
                '../../BackEnd/API/getConnection.php',
                {
                    login : $("#identifiantConnexion").val(),
                    password : $("#motDePasseConnexion").val()
                },

                function(data){

                    if(data == '0'){
                        $("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
                    }
                    else{
                        $("#resultat").html("<p>Erreur lors de la connexion...</p>");
                    }
                },
                'text'
            );
        });
    });
</script>

<?php
    include ("./Components/footer.php");
?>
