window.onload = function setAllAlbums()
{
  $.ajax({
    url: '../../BackEnd/API/getAllAlbums.php',
    type : 'GET',
    dataType:'json',
    success: function(data)
    {
      console.log(data)
    }
  })
}
