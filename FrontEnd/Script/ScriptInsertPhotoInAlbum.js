function insertPhoto() {
    error = false;
    $nameEvent = document.getElementById('Nom').value;
    if ($nameEvent == "") {
        error = true;
        alert("Veuillez entrer un nom d'évènement");
    }

}