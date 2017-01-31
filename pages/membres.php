<?php
session_start();
?>

<!Doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title>Phoenix - Membres</title>

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

  <!-- Other stylesheets -->
  <link rel="stylesheet" href="../CSS/membres.css">


  <!-- Coucou les amis, si vous regardez ce code source c'est que vous croyez qu'on a pas fait le site nous-mêmes.
  Mais nous, on s'appelle pas l'Embubu (Skyline je sais pas encore ce qu'ils ont fait), et on fait tout tous seuls comme des grands.
  Respectez-nous svp. Bisous bisous <3 -->

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

<div class="container extra-padding">
  <h1>Les membres</h1>
</div>


<div class="grey-background">
  <div class="container extra-padding">

    <div class="row row-eq-height">
      <div class="col-xs-12">
        <h2>Présidence</h2>
        <div class="row row-eq-height">
          <div class="col-xs-12 col-sm-4 col-sm-push-4">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/marina.jpg" alt="Marina Campos">
              <h3 class="respo">Marina Campos</h3>
        		</div>
          </div>
          <div class="col-xs-6 col-sm-4 col-sm-pull-4">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/lucas.jpg" alt="Lucas Richard">
              <h3>Lucas Richard</h3>
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-sm-4">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/weedens.jpg" alt="Weedens Innocent">
              <h3>Weedens Innocent</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="container extra-padding">

  <div class="row row-eq-height">

    <div class="col-sm-6 col-lg-5">
      <h2>Secrétariat</h2>
      <div class="row row-eq-height">
        <div class="col-xs-6">
          <div class="caption">
            <img class="img-responsive" src="../images/photos membres/louis.jpg" alt="Louis Guinard">
            <h3 class="respo">Louis Guinard</h3>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="caption">
            <img class="img-responsive" src="../images/photos membres/elise.jpg" alt="Elise Castelli">
            <h3>Elise Castelli</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-lg-offset-2 col-lg-5">
      <h2>Trésorerie</h2>
      <div class="row row-eq-height">
        <div class="col-xs-6">
          <div class="caption">
            <img class="img-responsive" src="../images/photos membres/timothée.jpg" alt="Timothée Carriço">
            <h3 class="respo">Timothée Carriço</h3>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="caption">
            <img class="img-responsive" src="../images/photos membres/neha.jpg" alt="Neha Negi">
            <h3>Neha Negi</h3>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- row -->
</div> <!-- container extra-padding-->


<div class="grey-background">
  <div class="container extra-padding">

    <div class="row row-eq-height">
      <div class="col-xs-12">
        <h2>Relation Entreprise</h2>
        <div class="row row-eq-height">
          <div class="col-xs-6 col-sm-3 col-lg-3">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/elie.jpg" alt="Elie Charbit">
              <h3 class="respo">Elie Charbit</h3>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-lg-3">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/valentin.jpg" alt="Valentin Crasnier">
              <h3>Valentin Crasnier</h3>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-lg-3">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/agathe.jpg" alt="Agathe Piguet">
              <h3>Agathe Piguet</h3>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-lg-3">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/pierre.jpg" alt="Pierre Millet">
              <h3>Pierre Millet</h3>
            </div>
          </div>
          <div class=" col-lg-2"></div>
        </div>
      </div>
    </div> <!-- row -->
  </div> <!-- container extra-padding-->

</div> <!-- grey-background -->

<div class="container extra-padding">

  <div class="row row-eq-height">

    <div class="col-sm-6 col-lg-5">
      <h2>Communication</h2>
      <div class="row row-eq-height">
        <div class="col-xs-6">
          <div class="caption">
            <img class="img-responsive" src="../images/photos membres/simon.jpg" alt="Simon Lanos">
            <h3 class="respo">Simon Lanos</h3>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="caption">
            <img class="img-responsive" src="../images/photos membres/xuan.jpg" alt="Xuan Nguyen">
            <h3>Xuan Nguyen</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-lg-offset-2 col-lg-5">
      <h2>Web</h2>
      <div class="row row-eq-height">
        <div class="col-xs-6">
          <div class="caption">
            <img class="img-responsive" src="../images/photos membres/tanguy.jpg" alt="Tanguy Kurylo">
            <h3 class="respo">Tanguy Kurylo</h3>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="caption">
            <img class="img-responsive" src="../images/photos membres/katia.jpg" alt="Katia Gil Guzman">
            <h3>Katia Gil Guzman</h3>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- row -->
</div> <!-- container extra-padding-->


<div class="grey-background">
  <div class="container extra-padding">

    <div class="row row-eq-height">
      <div class="col-xs-12 col-md-offset-2 col-md-8">
        <h2>Stand</h2>
        <div class="row row-eq-height">
          <div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-4 col-sm-push-4">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/nagui.jpg" alt="Nagui Ben Lemrid">
              <h3 class="respo">Nagui Ben Lemrid</h3>
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-sm-pull-4">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/delphine.jpg" alt="Delphine Ly">
              <h3>Delphine Ly</h3>
            </div>
          </div>
          <div class="col-xs-6 col-sm-4">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/maeva.jpg" alt="Maeva Boniface">
              <h3>Maeva Boniface</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="container extra-padding">

    <div class="row row-eq-height">
      <div class="col-xs-12">
        <h2>Soirée</h2>
        <div class="row row-eq-height">
          <div class="col-xs-6 col-sm-3 col-lg-3">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/amin.jpg" alt="Amin Ghannay">
              <h3 class="respo">Amin Ghannay</h3>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-lg-3">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/laura.jpg" alt="Laura Houlès">
              <h3>Laura Houlès</h3>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-lg-3">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/maxime.jpg" alt="Maxime Dubois d'Enghien">
              <h3>Maxime Dubois d'Enghien</h3>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-lg-3">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/lucie.jpg" alt="Lucie Daguzan">
              <h3>Lucie Daguzan</h3>
            </div>
          </div>
          <div class=" col-lg-2"></div>
        </div>
      </div>
    </div>

</div>

<div class="grey-background">
  <div class="container extra-padding">

    <div class="row row-eq-height">

      <div class="col-sm-6 col-lg-5">
        <h2>Sécurité &amp Logistique</h2>
        <div class="row row-eq-height">
          <div class="col-xs-6">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/david.jpg" alt="David Trochel">
              <h3 class="respo">David Trochel</h3>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/thomas.jpg" alt="Thomas Démaris">
              <h3>Thomas Démaris</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-offset-2 col-lg-5">
        <h2>Voyage</h2>
        <div class="row row-eq-height">
          <div class="col-xs-6">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/caroline.jpg" alt="Caroline Barret">
              <h3 class="respo">Caroline Barret</h3>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/perrine.jpg" alt="Perrine Jannin">
              <h3>Perrine Jannin</h3>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- row -->
  </div> <!-- container extra-padding-->
</div> <!--grey-background -->


<div class="container extra-padding">

  <div class="row row-eq-height">
      <div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-4 col-lg-offset-1 col-lg-2">
        <h2>SWEI</h2>
        <div class="caption">
          <img class="img-responsive" src="../images/photos membres/karoly.jpg" alt="Karoly Fogarassy">
          <h3 class="respo">Kàroly Fogarassy</h3>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-lg-2">
        <h2>WED</h2>
        <div class="caption">
          <img class="img-responsive" src="../images/photos membres/clément.jpg" alt="Clément Courtais">
          <h3 class="respo">Clément Courtais</h3>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-sm-4 col-lg-2">
        <h2>TEMA</h2>
        <div class="caption">
          <img class="img-responsive" src="../images/photos membres/guillaume.jpg" alt="Guillaume Gérard">
          <h3 class="respo">Guillaume Gérard</h3>
        </div>
      </div>
      <div class="col-xs-6 col-sm-offset-2 col-sm-4 col-lg-offset-0 col-lg-2">
        <h2>Ritz</h2>
        <div class="caption">
          <img class="img-responsive" src="../images/photos membres/baptiste.jpg" alt="Baptiste Girardin">
          <h3 class="respo">Baptiste Girardin</h3>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-sm-4 col-lg-2">
        <h2>Prévention</h2>
        <div class="caption">
          <img class="img-responsive" src="../images/photos membres/foued.jpg" alt="Foued El Laoui">
          <h3 class="respo">Foued El Laoui</h3>
        </div>
      </div>
    </div>

  </div>

</div>

<div class="grey-background">
  <div class="container extra-padding">

    <div class="row row-eq-height">

      <div class="col-sm-6 col-lg-5">
        <h2>Pougnes TSP</h2>
        <div class="row row-eq-height">
          <div class="col-xs-6">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/lisa.jpg" alt="Lisa Bernanose">
              <h3>Lisa Bernanose</h3>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/meric.jpg" alt="Meric Carpaye">
              <h3>Meric Carpaye</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-offset-2 col-lg-5">
        <h2>Pougnes TEM</h2>
        <div class="row row-eq-height">
          <div class="col-xs-6">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/karelle.jpg" alt="Karelle Mongruel">
              <h3>Karelle Mongruel</h3>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="caption">
              <img class="img-responsive" src="../images/photos membres/cloé.jpg" alt="Cloé Denis">
              <h3>Cloé Denis</h3>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- row -->
  </div> <!-- container extra-padding-->
</div> <!--grey-background -->

<div class="footer">
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

<script src="../js/set-height.js"></script>

</html>
