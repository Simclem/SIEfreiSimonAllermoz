function insertUser()
{
  error = false;
  nom = document.getElementById('Nom').value;
  if (nom =="")
  {
    error = true;
    alert("Veuillez remplir le champs du nom");
  }
  Prenom = document.getElementById('Prenom').value;
  if (Prenom =="")
  {
    error = true;
    alert("Veuillez remplir le champs du Prenom");
  }
  Adresseemail = document.getElementById('Adressee-mail').value;
  if (Adresseemail =="")
  {
    error = true;
    alert("Veuillez remplir le champs de Adressee-mail");
  }
  numL = document.getElementById('numL').value;
  if (numL =="")
  {
    error = true;
    alert("Veuillez remplir le champs du numéro de license");
  }
  motDePasseConnexion = document.getElementById('motDePasseConnexion').value;
  if (motDePasseConnexion =="")
  {
    error = true;
    alert("Veuillez remplir le champs du  mot de passe");
  }
  if (error == false)
  {

    console.log('http://localhost/SIEfrei/SIEfreiSimonAllermoz/BackEnd/API/insertUser.php?nom='+nom+'&prenom='+Prenom+'&add='+Adresseemail+'&NumLicense='+numL+'&pass='+motDePasseConnexion);
  }

}
