function insertAlbum()
{
  error = false;
  $nameAlbum = document.getElementById('Titre').value;
  if ($nameAlbum == "")
  {
    error = true;
    alert ("Veuillez entrer un nom d'album");
  }

  if (error == false)
  {
    $.ajax({
      type : 'POST',
      datatype:"application/json",
      url:'../../BackEnd/API/insertAlbum.php',
      data : { nameAlbum : $nameAlbum },
      success : function()
      {
        document.getElementById('toHide').style.display = 'none';
        //document.getElementById('displayError').style.display = 'none';
        document.getElementById('displayConnect').style.display = 'block';
      },

    })
  }



}
