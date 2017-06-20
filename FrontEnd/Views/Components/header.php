<?php
  session_start();
?>


<html>
  <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href ="../Script/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href ="../CSS/main.css">
      <link rel="stylesheet" type="text/css" href ="../CSS/FontAwesome/css/font-awesome.min.css">
      <script  type="text/javascript" src ="../Script/jQuery/jquery-3.2.1.min.js"></script>

      <title>Tennis Club</title>
      <link rel="icon" href="../Pictures/Logo.jpg" />
  </head>
  <body>

<div class="row">
    <div class="container-fluid">
      <div class="col-md-1">
          <a href="./index.php"><img src="../Pictures/Logo.jpg" ></a>
      </div>
      <div class="col-md-10">
        <div class="row">
          <h1 style ="text-align : center">Tennis Club</h1>
        </div>
        <div class="row">
          <h3 style ="text-align : center">Bruyères le Châtel</h3>
        </div>
      </div>
      <div class="col-md-1">
        <div class="row">
        </br>
          Notre partenaire
        </div>
        <div class="row">

        <a href="https://www.tennisachat.com" target="_blank"><img src = "../Pictures/TennisAchat.jpg"></a>
      </div>
      </div>
    </div>
  </div>



  <div class="row" >
    <div class="container-fluid">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php">Accueil</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="row">
            <ul class="nav navbar-nav">
                <li><a href="./Evenements.php">Evènements</a></li>
              <li><a href="#">Albums Photos</a></li>
              <li><a href="#">Réserver un court</a></li>
              <li><a href="#">Compétition</a></li>
            </ul>

            <?php
            if (empty($_SESSION["IdUser"])){
                ?> <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="connexion.php">Connexion</a>
                            </li>
                            <li>
                                <a href="inscription.php">Inscription</a>
                            </li>
                        </ul><?php
                } else {
                    ?><ul class="nav navbar-nav navbar-right">
                            <li>
                                <a><?php echo($_SESSION["Prenom"])?></a>
                            </li>
                            <li>
                                <a href="deconnexion.php">Déconnexion</a>
                            </li>
                        </ul><?php
                }
            ?>

          </div>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

    </div>
  </div>
