<?php
function insertUser($nom, $prenom, $mail, $license, $mdp)
{
  //$db = new PDO('mysql:host=localhost:8889;dbname=siefreiprojet', 'root', 'root');
  $db = new PDO('mysql:host=localhost:3306;dbname=siefreiprojet', 'root', '');

  $stmt = $db->prepare("INSERT INTO `users`(`IdUser`, `Nom`, `Prenom`, `AdresseMail`, `NumLicense`, `password`, `salt`, `isAdmin`) VALUES (NULL,:nom,:prenom,:mail,:license,:pass,:salt,0)");
  $salt =mcrypt_create_iv(32, MCRYPT_DEV_URANDOM);
  $pass = htmlspecialchars($mdp);
  $pass = crypt($pass, $salt);
  $stmt->bindParam(':nom', htmlspecialchars($nom));
  $stmt->bindParam(':prenom', htmlspecialchars($prenom));
  $stmt->bindParam(':mail', htmlspecialchars($mail));
  $stmt->bindParam(':license', htmlspecialchars($license));
  $stmt->bindParam(':pass', ($pass));
  $stmt->bindParam(':salt', ($salt));
  $stmt->execute();
}

function insertEvent($nom, $desc, $date, $heure, $duree, $url)
{
  $db = new PDO('mysql:host=localhost:3306;dbname=siefreiprojet', 'root', '');
  $req = $db->prepare('INSERT INTO `event`(`idEvent`, `NomEvent`, `Description`, `Date`, `Heure`, `Duree`, `urlPhoto`) VALUES (NULL,:name,:descr,:dateEvent,:heureDep,:dur,:url)');
  $req->bindParam(':name', htmlspecialchars($nom));
  $req->bindParam(':descr', htmlspecialchars($desc));
  $req->bindParam(':dateEvent', htmlspecialchars($date));
  $req->bindParam(':heureDep', htmlspecialchars($heure));
  $req->bindParam(':dur', htmlspecialchars($duree));
  $req->bindParam(':url', htmlspecialchars($url));
  $req->execute();
}




function insertAssoc($idU, $idE)
{
  $db = new PDO('mysql:host=localhost:3306;dbname=siefreiprojet', 'root', '');
  $req = $db->prepare('INSERT INTO `assocuserevent`(`IdAssoc`, `idUser`, `idEvent`) VALUES (NULL,:u,:e)');
  $req->bindParam(':u', htmlspecialchars($idU));

  $req->bindParam(':e', htmlspecialchars($idE));
  $req->execute();
}


//SELECT DISTINCT event.NomEvent, event.Description, event.Date, event.Heure, event.Duree FROM `assocuserevent` INNER JOIN event on event.idEvent = assocuserevent.idEvent WHERE assocuserevent.idUser
function getMyEvent($idU)
{
  $db = new PDO('mysql:host=localhost:3306;dbname=siefreiprojet', 'root', '');
  $req = $db->prepare ('SELECT DISTINCT event.NomEvent, event.Description, event.Date, event.Heure, event.Duree FROM `assocuserevent` INNER JOIN event on event.idEvent = assocuserevent.idEvent WHERE assocuserevent.idUser = ?') ;
  $req ->execute(array($idU));
  $result = $req->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}


function getUserByMailAndPass($mail, $pass)
{
  $db = new PDO('mysql:host=localhost:3306;dbname=siefreiprojet', 'root', '');
  //$db =new PDO('mysql:host=localhost:8889;dbname=siefreiprojet', 'root', 'root');
  $req = $db->prepare ("SELECT * FROM USERS WHERE AdresseMail = ?") ;

  $req->execute(array($mail));
  if (empty($req))
  {
    print(0);
  }
  else
  {
    $toCheckPassword = $req->fetchAll();

      $sel = $toCheckPassword[0]['salt'];
      $newPass = crypt( $pass, $sel);
      $newReq = $db->prepare("SELECT * FROM USERS WHERE AdresseMail = ? AND password = ?");
      $newReq->execute(array($mail, $newPass));
      $resSecReq = $newReq->fetchAll(PDO::FETCH_ASSOC);
      $tabReq = array();
      $resSecReq[0]["password"] ="";
      $resSecReq[0]["salt"]="";
      return $resSecReq;



  }

}

function getAllUsers()
{
  $db = new PDO('mysql:host=localhost:3306;dbname=siefreiprojet', 'root', '');
  //$db = new PDO('mysql:host=localhost:8889;dbname=siefreiprojet', 'root', 'root');
  $res =$db->query( "SELECT AdresseMail FROM USERS");
  $obj = $res->fetchAll(PDO::FETCH_ASSOC);
  $json = json_encode($obj);
  print($json);
}


function getAllEvents()
{
        $db = new PDO('mysql:host=localhost:3306;dbname=siefreiprojet', 'root', '');
        //$db = new PDO('mysql:host=localhost:8889;dbname=siefreiprojet', 'root', 'root');
        $res =$db->query( "SELECT * FROM `event`");
        $obj = $res->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($obj);
        print($json);



}



function resetDB()
{

    //$db = new PDO('mysql:host=localhost:8889;dbname=siefreiprojet', 'root', 'root');
    $db = new PDO('mysql:host=localhost:3306;dbname=siefreiprojet', 'root', '');

    $stmt = $db->prepare("DROP TABLE users");
    $stmt->execute();
    $stmt = $db->prepare("DROP TABLE event");
    $stmt->execute();
    $stmt = $db->prepare("DROP TABLE assocuserevent");
    $stmt->execute();
    $stmt = $db->prepare("CREATE TABLE `assocuserevent` (
     `IdAssoc` int(11) NOT NULL AUTO_INCREMENT,
     `idUser` int(11) NOT NULL,
     `idEvent` int(11) NOT NULL,
     PRIMARY KEY (`IdAssoc`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1"
    );
    $stmt->execute();
    $stmt = $db->prepare("CREATE TABLE `users` (
     `IdUser` int(11) NOT NULL AUTO_INCREMENT,
     `Nom` VARCHAR(32) NOT NULL,
     `Prenom` VARCHAR(32) NOT NULL,
     `AdresseMail` VARCHAR(32) NOT NULL,
     `NumLicense` varchar(32) NOT NULL,
     `password` varbinary(32) NOT NULL,
     `salt` varbinary(32) NOT NULL,
     `isAdmin` tinyint(1) NOT NULL,
     PRIMARY KEY (`IdUser`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1
    ");
    $stmt->execute();
    $stmt = $db->prepare("CREATE TABLE `event` (
     `idEvent` int(11) NOT NULL AUTO_INCREMENT,
     `NomEvent` varchar(32) NOT NULL,
     `Description` text NOT NULL,
     `Date` date NOT NULL,
     `Heure` varchar(10) NOT NULL,
     `Duree` varchar(32) NOT NULL,
     `urlPhoto` varchar(32) NOT NULL,
     PRIMARY KEY (`idEvent`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1
    ");
    $stmt->execute();
    $stmt = $db->prepare('INSERT INTO `event`(`idEvent`, `NomEvent`, `Description`, `Date`, `Heure`, `Duree`, `urlPhoto`) VALUES (NULL,"Event1","Description1","2017/01/01","17h00","3h","NoURL");');
    $stmt->execute();
    $stmt = $db->prepare('INSERT INTO `event`(`idEvent`, `NomEvent`, `Description`, `Date`, `Heure`, `Duree`, `urlPhoto`) VALUES (NULL,"Event2","Description2","2018/01/01","17h00","4h","NoURL");');
    $stmt->execute();
    $stmt = $db->prepare('INSERT INTO `event`(`idEvent`, `NomEvent`, `Description`, `Date`, `Heure`, `Duree`, `urlPhoto`) VALUES (NULL,"Event3","Description3","2017/01/10/","17h00","5h","NoURL");');
    $stmt->execute();
    $salt =mcrypt_create_iv(32, MCRYPT_DEV_URANDOM);
    $pass = crypt("passAdmin", $salt);
    $stmt = $db->prepare('INSERT INTO `users`(`IdUser`, `Nom`, `Prenom`, `AdresseMail`, `NumLicense`, `password`, `salt`, `isAdmin`) VALUES (NULL,"Admin","Admin","admin@gmail.com","1",:pass,:salt,1)');
    $stmt->bindParam(':pass', ($pass));
    $stmt->bindParam(':salt', ($salt));
    $stmt->execute();
    insertUser("nom1","prenom1", "mail1", "123", "pass1");
    insertUser("nom2","prenom2", "mail2", "456", "pass2");
    insertUser("nom3","prenom3", "mail3", "789", "pass3");
    insertUser("nom4","prenom4", "mail4", "101", "pass4");
    insertUser("nom5","prenom5", "mail5", "112", "pass5");
    $stmt = $db->prepare('INSERT INTO `assocuserevent`(`IdAssoc`, `idUser`, `idEvent`) VALUES (NULL,1,1);');
    $stmt->execute();
    $stmt = $db->prepare('INSERT INTO `assocuserevent`(`IdAssoc`, `idUser`, `idEvent`) VALUES (NULL,1,2);');
    $stmt->execute();
    $stmt = $db->prepare('INSERT INTO `assocuserevent`(`IdAssoc`, `idUser`, `idEvent`) VALUES (NULL,2,1);');
    $stmt->execute();
}

?>
