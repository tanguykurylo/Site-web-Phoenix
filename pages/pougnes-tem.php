<?php session_start(); ?>
<!Doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title>Pougnes TEM</title>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!--Google Analytics Website Tracker -->
  <script src="../js/google-analytics-tracker.js"></script>


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Google fonts stylesheets -->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
  <link rel='stylesheet' type='text/css' href="https://fonts.googleapis.com/css?family=Lora">

  <!-- Chrome, Firefox OS and Opera custom adress bar color-->
  <meta name="theme-color" content="#99031C">
  <!-- Windows Phone custom adress bar color-->
  <meta name="msapplication-navbutton-color" content="#99031C">
  <!-- iOS Safari custom adress bar color-->
  <meta name="apple-mobile-web-app-status-bar-style" content="#99031C">


  <!-- Personnal stylesheet -->
  <link rel="stylesheet" href="../CSS/style.css">

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-smartphone" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
                <a class="navbar-brand" href="../index.php">Phoenix</a>
            </div>
            <div class="collapse navbar-collapse" id="menu-smartphone">
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="../index.php#programme" class="hidden-xs">Programme</a> </li>
                    <li> <a href="../index.php#programme" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse">Programme</a> </li>
                    <li> <a href="../pages/membres.php">Membres</a> </li>
                    <li> <a href="../pages/partenaires.php">Partenaires</a> </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pougnes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../pages/pougnes-tsp.php">TSP</a></li>
                            <li><a href="../pages/pougnes-tem.php">TEM</a></li>
                        </ul>
                    </li>
                    <li> <a href="../pages/contact.php">Contact</a> </li>
                    <li>
                        <?php
                        if (isset($_SESSION['id']))
                        {
                            ?>
                            <a href="" data-toggle="modal" data-target="#account-modal">
                            <?php
                        }
                        else {
                            ?>
                            <a href="" data-toggle="modal" data-target="#login-modal">
                            <?php
                        }
                        if (isset($_SESSION['nom']) AND isset($_SESSION['prenom']))
                        {
                            echo ($_SESSION['prenom'].' '.$_SESSION['nom']); //TODO name to upercase and person icon
                        }
                        else {
                            echo 'Connexion' ;
                        }
                        ?>
                    </a> </li>
                </ul>
            </div>
        </div>
    </nav>

  <?php include("../admin/modals.php"); ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h1>Pougnes TEM</h1>
      </div>
    </div>

    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
        <h4>Compta</h4>
        <a href="../pougnes-tem/Compta/FICHE Pougne-Phoenix-Compta.docx">Fiche Compta</a>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
        <h4>Connaissance de l'entreprise</h4>
        <a href="../pougnes-tem/Connaissance de l'entreprise/Connaissance-de-lentreprise-PHOENIX.pdf">Fiche Connaissance de l'entreprise</a>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
        <h4>Gestion des ressources humaines</h4>
        <a href="../pougnes-tem/Gestion des ressources humaines/rh cours 1.pdf">Cours de RH</a><br>
        <a href="../pougnes-tem/Gestion des ressources humaines/le recrutement.pdf">Le recrutement</a><br>
        <a href="../pougnes-tem/Gestion des ressources humaines/la formation.pdf">La formation</a><br>
        <a href="../pougnes-tem/Gestion des ressources humaines/la rémunération.pdf">La rémunération</a><br>
        <a href="../pougnes-tem/Gestion des ressources humaines/l'évaluation.pdf">L'évaluation</a><br>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
        <h4>Marketing approfondi</h4>
        <a href="../pougnes-tem/Marketing approfondi/Rappels-marketing.docx">Rappels de marketing</a><br>
        <a href="../pougnes-tem/Marketing approfondi/Marketing-international.pdf">Marketing international</a>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
        <h4>Maths Financières</h4>
        <a href="../pougnes-tem/Maths Financières/Maths financières.pdf">Fiche de cours</a>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
        <h4>Vendre</h4>
        <a href="../pougnes-tem/Vendre/Fiche vente.pdf">Fiche vente</a>
      </div>

    </div>

  </div>

  <div class="footer push-to-bottom-large-screen">
    <div class="container-fluid">
      <div class="col-xs-12 col-sm-6">
        <p>Fait avec amour par le pôle web de <em>Phoenix</em>.</p>
      </div>
      <div class="col-xs-12 col-sm-6">
        <p>Un problème avec le site? <a href="contact-site-web.php">Contactez-nous</a>.</p>
      </div>
    </div>
  </div>


</body>

</html>
