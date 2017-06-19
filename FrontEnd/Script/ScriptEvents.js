window.onload = function setAllEventsInATab()
{

  $.ajax({

    url: 'http://localhost/SIEfrei/SIEfreiSimonAllermoz/BackEnd/API/getAllEvents.php',
    type : 'GET',
    dataType:'json',
    success: function(data)
    {

      var line = document.getElementsByTagName('tbody')[0];
      var indiceTD = 7;
      for(i = 0 ;i < data.length; i++)
      {

        //console.log(i);
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

        //+6
      }
      //var table = document.createElement('table');
      //contentPosition.appendChild(table);
    }
  });
}
