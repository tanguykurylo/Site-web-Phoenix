<?php
session_start();
?>

<!Doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>Phoenix - Contact</title>

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
      <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-6">
            <h1>Contacter le pôle Web</h1>
            <p>
                Un problème avec le site? Envoyez-nous un mail à <strong>webmaster@phoenix2016.fr</strong>
            </p>
      </div>
    </div>
  </div>

  <div class="footer push-to-bottom">
    <div class="container-fluid">
      <div class="col-xs-12">
        <p>Fait avec amour par le pôle web de <em>Phoenix</em>.</p>
      </div>
    </div>
  </div>

</body>

</html>
