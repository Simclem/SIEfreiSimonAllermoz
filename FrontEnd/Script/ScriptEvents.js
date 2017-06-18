function setAllEventsInATab()
{
  console.log("je suis dans la fonction")

  $.ajax({

    url: 'http://localhost/SIEfrei/SIEfreiSimonAllermoz/BackEnd/API/getAllEvents.php',
    type : 'GET',
    dataType:'json',
    success: function(data)
    {

      console.log(data[0].Description);

    }
  });
}
