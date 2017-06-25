function insertUser()
{
  error = false;
  $nom = document.getElementById('Nom').value;
  if ($nom =="")
  {
    error = true;
    alert("Veuillez remplir le champs du nom");
  }
  $prenom = document.getElementById('Prenom').value;
  if ($prenom =="")
  {
    error = true;
    alert("Veuillez remplir le champs du Prenom");
  }
  $adresseemail = document.getElementById('Adressee-mail').value;
  if ($adresseemail =="")
  {
    error = true;
    alert("Veuillez remplir le champs de Adressee-mail");
  }
  $numL = document.getElementById('numL').value;
  if ($numL =="")
  {
    error = true;
    alert("Veuillez remplir le champs du numéro de license");
  }
  $motDePasseConnexion = document.getElementById('motDePasseConnexion').value;
  if ($motDePasseConnexion =="")
  {
    error = true;
    alert("Veuillez remplir le champs du  mot de passe");
  }
  $confirmationMotDePasseConnexion = document.getElementById('confirmationMotDePasseConnexion').value;
  if ($confirmationMotDePasseConnexion =="")
  {
    error = true;
    alert("Veuillez remplir le champs de la confirmation de mot de passe");
  }

  if ($confirmationMotDePasseConnexion === $motDePasseConnexion)
  {

  }
  else {
    error = true;
    alert("Les mots de passe ne sont pas identiques");

  }





  if (error == false)
  {
    document.getElementById('toHide').style.display = 'none';
    //document.getElementById('displayError').style.display = 'none';
    document.getElementById('displayConnect').style.display = 'block';
    $.ajax({
      type : 'POST',
      datatype : "application/json",
      url:'../../BackEnd/API/insertUser.php',
      data : { nom : $nom, prenom : $prenom, add : $adresseemail, NumLicense : $numL, pass : $motDePasseConnexion},
      success : function()
      {

      },
      error: function(jqXHR, status, error) {
      }
    });
  }

}
