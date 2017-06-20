function insertEvent()
{
  error = false;
  $nameEvent = document.getElementById('Nom');
  if ($nameEvent == "")
  {
    error = true;
    alert ("Veuillez entrer un nom d'évènement");
  }

  $Description = document.getElementById('Desc');
  if ($Description == "")
  {
    error = true;
    alert ("Veuillez entrer une description d'évènement");
  }

  $DateEvent = document.getElementById('DateEvent');
  if ($DateEvent == "")
  {
    error = true;
    alert ("Veuillez entrer une date pour l'évènement");
  }

  $HeureEvent = document.getElementById('HeureEvent');
  if ($HeureEvent == "")
  {
    error = true;
    alert ("Veuillez entrer une heure de début");
  }

  $Duree = document.getElementById('Duree');
  if ($Duree == "")
  {
    error = true;
    alert ("Veuillez entrer une duree");
  }

  $urlPhoto = document.getElementById('urlPhoto');
  if ($urlPhoto == "")
  {
    error = true;
    alert ("Veuillez entrer une url pour la photo. Si vous n'avez pas de photo mettez NoURL");
  }

  if (error == false)
  {
    $.ajax({
      type : 'POST',
      datatype:"application/json",
      url:'../../BackEnd/API/insertEvent.php',
      data : { nameEvent : $nameEvent, Descr : $Description, dateE : $DateEvent, HeureE : $HeureEvent, Duree : $Duree},
      success : function()
      {

      }
    })
  }

}
