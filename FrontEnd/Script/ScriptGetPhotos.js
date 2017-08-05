window.onload = function getPhotos() {
    var idAlbum = document.getElementById('idA').value;
    var toremove = document.getElementById('idA');
    toremove.parentNode.removeChild(document.getElementById('idA'));
    console.log(idAlbum);

    $.ajax({
        url: '../../BackEnd/API/getMyPhotoOfAlbum.php?idAlbum=' + idAlbum,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var i = 0;
            var idDiv = 14;
            var idCol = 0;
            var currentCol;
            var CurrentPosition = document.getElementsByTagName('div')[15];
            console.log(data);
            console.log(data[0]);
            console.log(data[0].idPhotos);
            console.log((i - data.length))
            console.log(document.getElementsByTagName('div')[15])

            while (i < data.length) {
                if ((data.length - i) == 1) {
                    var newDiv = document.createElement('div');
                    newDiv.className = 'row';
                    CurrentPosition.appendChild(newDiv);
                    var newCol = document.createElement('div');
                    newCol.className = 'col-md-12'
                    newDiv.appendChild(newCol);
                    var contain = document.createElement('div');
                    newCol.appendChild(contain);
                    contain.style.textAlign = 'center';
                    contain.innerHTML = '<a target="_blank" href="../Pictures/' + data[i].link + '"> <img src="../Pictures/' + data[i].link + ' "width="300" height="200" ><br />' + data[i].Description + ' </a>'
                    i += 1;
                }
                if ((data.length - i) == 2) {
                    var newDiv = document.createElement('div');
                    newDiv.className = 'row';
                    CurrentPosition.appendChild(newDiv);
                    var newCol = document.createElement('div');
                    newCol.className = 'col-md-6'
                    newDiv.appendChild(newCol);
                    var contain = document.createElement('div');
                    newCol.appendChild(contain);
                    contain.style.textAlign = 'center';
                    contain.innerHTML = '<a target="_blank" href="../Pictures/' + data[i].link + '"> <img src="../Pictures/' + data[i].link + ' "width="300" height="200" ><br />' + data[i].Description + ' </a>'
                    i += 1;
                    var newCol = document.createElement('div');
                    newCol.className = 'col-md-6'
                    newDiv.appendChild(newCol);
                    var contain = document.createElement('div');
                    newCol.appendChild(contain);
                    contain.style.textAlign = 'center';
                    contain.innerHTML = '<a target="_blank" href="../Pictures/' + data[i].link + '"> <img src="../Pictures/' + data[i].link + ' "width="300" height="200" ><br />' + data[i].Description + ' </a>'
                    i += 1;
                }
                if ((data.length - i) == 3) {
                    var newDiv = document.createElement('div');
                    newDiv.className = 'row';
                    CurrentPosition.appendChild(newDiv);
                    var newCol = document.createElement('div');
                    newCol.className = 'col-md-4'
                    newDiv.appendChild(newCol);
                    var contain = document.createElement('div');
                    newCol.appendChild(contain);
                    contain.style.textAlign = 'center';
                    contain.innerHTML = '<a target="_blank" href="../Pictures/' + data[i].link + '"> <img src="../Pictures/' + data[i].link + ' "width="300" height="200" ><br />' + data[i].Description + ' </a>'
                    i += 1;
                    var newCol = document.createElement('div');
                    newCol.className = 'col-md-4'
                    newDiv.appendChild(newCol);
                    var contain = document.createElement('div');
                    newCol.appendChild(contain);
                    contain.style.textAlign = 'center';
                    contain.innerHTML = '<a target="_blank" href="../Pictures/' + data[i].link + '"> <img src="../Pictures/' + data[i].link + ' "width="300" height="200" ><br />' + data[i].Description + ' </a>'
                    i += 1;
                    var newCol = document.createElement('div');
                    newCol.className = 'col-md-4'
                    newDiv.appendChild(newCol);
                    var contain = document.createElement('div');
                    newCol.appendChild(contain);
                    contain.style.textAlign = 'center';
                    contain.innerHTML = '<a target="_blank" href="../Pictures/' + data[i].link + '"> <img src="../Pictures/' + data[i].link + ' "width="300" height="200" ><br />' + data[i].Description + ' </a>'
                    i += 1;

                }
                if ((data.length - i) >= 4) {
                    var newDiv = document.createElement('div');
                    newDiv.className = 'row';
                    CurrentPosition.appendChild(newDiv);
                    var newCol = document.createElement('div');
                    newCol.className = 'col-md-3'
                    newDiv.appendChild(newCol);
                    var contain = document.createElement('div');
                    newCol.appendChild(contain);
                    contain.style.textAlign = 'center';
                    contain.innerHTML = '<a target="_blank" href="../Pictures/' + data[i].link + '"> <img src="../Pictures/' + data[i].link + ' "width="300" height="200" ><br />' + data[i].Description + ' </a>'
                    i += 1;
                    var newCol = document.createElement('div');
                    newCol.className = 'col-md-3'
                    newDiv.appendChild(newCol);
                    var contain = document.createElement('div');
                    newCol.appendChild(contain);
                    contain.style.textAlign = 'center';
                    contain.innerHTML = '<a target="_blank" href="../Pictures/' + data[i].link + '"> <img src="../Pictures/' + data[i].link + ' "width="300" height="200" ><br />' + data[i].Description + ' </a>'
                    i += 1;
                    var newCol = document.createElement('div');
                    newCol.className = 'col-md-3'
                    newDiv.appendChild(newCol);
                    var contain = document.createElement('div');
                    newCol.appendChild(contain);
                    contain.style.textAlign = 'center';
                    contain.innerHTML = '<a target="_blank" href="../Pictures/' + data[i].link + '"> <img src="../Pictures/' + data[i].link + ' "width="300" height="200" ><br />' + data[i].Description + ' </a>'
                    i += 1;
                    var newCol = document.createElement('div');
                    newCol.className = 'col-md-3'
                    newDiv.appendChild(newCol);
                    var contain = document.createElement('div');
                    newCol.appendChild(contain);
                    contain.style.textAlign = 'center';
                    contain.innerHTML = '<a target="_blank" href="../Pictures/' + data[i].link + '"> <img src="../Pictures/' + data[i].link + ' "width="300" height="200" ><br />' + data[i].Description + ' </a>'
                    i += 1;

                }

            }

        }
    })
}