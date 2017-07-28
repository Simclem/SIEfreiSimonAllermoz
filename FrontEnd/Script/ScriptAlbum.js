window.onload = function setAllAlbums()
{
  $.ajax({
    url: '../../BackEnd/API/getAllAlbums.php',
    type : 'GET',
    dataType:'json',
    success: function(data)
    {
      var line = document.getElementsByTagName('tbody')[0];
      var indiceTD = 2;
      for (i = 0 ; i < data.length; i ++)
      {
        newLine = document.createElement('tr');
        line.appendChild(newLine);

        var currentLine=document.getElementsByTagName('tr')[i+1];
        newCell = document.createElement('td');
        newCell.style.border = "none";
        currentLine.appendChild(newCell);
        document.getElementsByTagName('td') [indiceTD].innerHTML = data[i].idAlbum
        indiceTD+=1;
        var currentLine=document.getElementsByTagName('tr')[i+1];
        newCell = document.createElement('td');
        newCell.style.border = "none";
        currentLine.appendChild(newCell);
        document.getElementsByTagName('td') [indiceTD].innerHTML = "<a href=PhotosInAlbum.php?idAlbum="+data[i].idAlbum+">" + data[i].titre + "</a>"
        indiceTD+=1;
      }
    }
  })
}
