window.onload = function setAllEventsInATab()
{

  $.ajax({

    url: 'http://localhost/SIEfrei/SIEfreiSimonAllermoz/BackEnd/API/getAllEvents.php',
    type : 'GET',
    dataType:'json',
    success: function(data)
    {

      console.log(data);
      var contentPosition = document.getElementsByTagName('div')[15];


      var table = document.createElement('table');
      contentPosition.appendChild(table);
    }
  });
}
