
window.onload = function setAllEventsInATab()
{

  $.ajax({

    url: '../../BackEnd/API/getAllEvents.php',
    type : 'GET',
    dataType:'json',
    success: function(data)
    {
      var idUser = document.getElementById('idU').value;
      var toremove = document.getElementById('idU');
      toremove.parentNode.removeChild(document.getElementById('idU'));
      var line = document.getElementsByTagName('tbody')[0];
      var indiceTD = 8;

      for(i = 0 ;i < data.length; i++)
      {


        newLine = document.createElement('tr');
        line.appendChild(newLine);


        var currentLine = document.getElementsByTagName('tr')[i+1];
        newCell = document.createElement('td');
        currentLine.appendChild(newCell);
        document.getElementsByTagName('td')[indiceTD].innerHTML = data[i].idEvent;
        indiceTD+=1;


        var currentLine = document.getElementsByTagName('tr')[i+1];
        newCell = document.createElement('td');
        currentLine.appendChild(newCell);
        document.getElementsByTagName('td')[indiceTD].innerHTML = data[i].NomEvent;
        indiceTD+=1;

        var currentLine = document.getElementsByTagName('tr')[i+1];
        newCell = document.createElement('td');
        currentLine.appendChild(newCell);
        document.getElementsByTagName('td')[indiceTD].innerHTML = data[i].Description;
        indiceTD+=1;

        var currentLine = document.getElementsByTagName('tr')[i+1];
        newCell = document.createElement('td');
        currentLine.appendChild(newCell);
        document.getElementsByTagName('td')[indiceTD].innerHTML = data[i].Date;
        indiceTD+=1;


        var currentLine = document.getElementsByTagName('tr')[i+1];
        newCell = document.createElement('td');
        currentLine.appendChild(newCell);
        document.getElementsByTagName('td')[indiceTD].innerHTML = data[i].Heure;
        indiceTD+=1;


        var currentLine = document.getElementsByTagName('tr')[i+1];
        newCell = document.createElement('td');
        currentLine.appendChild(newCell);
        document.getElementsByTagName('td')[indiceTD].innerHTML = data[i].Duree;
        indiceTD+=1;


        var currentLine = document.getElementsByTagName('tr')[i+1];
        newCell = document.createElement('td');
        currentLine.appendChild(newCell);

        if(data[i].urlPhoto =="NoURL")
        {
          document.getElementsByTagName('td')[indiceTD].innerHTML = "No photo available";
          indiceTD+=1;

        }
        else {
          document.getElementsByTagName('td')[indiceTD].innerHTML = '<img src="../Picures/' +data[i].urlPhoto+'">' ;
          indiceTD+=1;
        }




        var currentLine = document.getElementsByTagName('tr')[i+1];
        newCell = document.createElement('td');
        currentLine.appendChild(newCell);
        document.getElementsByTagName('td')[indiceTD].innerHTML ="<button  type=\"button\" class=\"btn btn-primary\" onclick=\"inscription("+idUser+","+data[i].idEvent+")\"> S\'inscrire </button>";
        indiceTD+=1;


      }
      getMyEvent(idUser, indiceTD, data.length+1);
    }
  });

}

function inscription(idUser, idEvent)
{
  console.log(idUser);
  console.log(idEvent);
  if (idUser == 0)
  {
    document.getElementById('displayError').style.display = 'block';
    document.getElementById('displayConnect').style.display = 'none';
  }
  else {
    $.ajax({
      type : 'POST',
      datatype : "application/json",
      url:'../../BackEnd/API/inscriptionEvent.php',
      data : {idu : idUser, ide : idEvent},
      success : function()
      {
        document.getElementById('displayError').style.display = 'none';
        document.getElementById('displayConnect').style.display = 'block';
      },
      error: function(jqXHR, status, error) {
      }
    });

  }

}


function getMyEvent($idUser, $indiceTD, sizeFirstTab)
{
  if($idUser != 0)
  {
    $.ajax({
      url : '../../BackEnd/API/getMyEvents.php?idU='+$idUser,
      type:'GET',
      dataType:'json',
      success: function(data)
      {
        console.log(data);
        var line = document.getElementsByTagName('tbody')[1];

        var indiceTD = $indiceTD+6;

        for (i = 0 ; i < data.length ; i ++)
        {
          newLine = document.createElement('tr');
          line.appendChild(newLine);


          var currentLine = document.getElementsByTagName('tr')[sizeFirstTab+i+1]
          console.log(currentLine)
          newCell = document.createElement('td');
          currentLine.appendChild(newCell);
          document.getElementsByTagName('td')[indiceTD].innerHTML = data[i].idEvent;
          indiceTD+=1;


          var currentLine = document.getElementsByTagName('tr')[sizeFirstTab+i+1]
          console.log(currentLine)
          newCell = document.createElement('td');
          currentLine.appendChild(newCell);
          document.getElementsByTagName('td')[indiceTD].innerHTML = data[i].NomEvent;
          indiceTD+=1;

          var currentLine = document.getElementsByTagName('tr')[sizeFirstTab+i+1]
          console.log(currentLine)
          newCell = document.createElement('td');
          currentLine.appendChild(newCell);
          document.getElementsByTagName('td')[indiceTD].innerHTML = data[i].Description;
          indiceTD+=1;

          var currentLine = document.getElementsByTagName('tr')[sizeFirstTab+i+1]
          console.log(currentLine)
          newCell = document.createElement('td');
          currentLine.appendChild(newCell);
          document.getElementsByTagName('td')[indiceTD].innerHTML = data[i].Date;
          indiceTD+=1;

          var currentLine = document.getElementsByTagName('tr')[sizeFirstTab+i+1]
          console.log(currentLine)
          newCell = document.createElement('td');
          currentLine.appendChild(newCell);
          document.getElementsByTagName('td')[indiceTD].innerHTML = data[i].Heure;
          indiceTD+=1;

          var currentLine = document.getElementsByTagName('tr')[sizeFirstTab+i+1]
          console.log(currentLine)
          newCell = document.createElement('td');
          currentLine.appendChild(newCell);
          document.getElementsByTagName('td')[indiceTD].innerHTML = data[i].Duree;
          indiceTD+=1;

        }
      }
    })
  }

}
