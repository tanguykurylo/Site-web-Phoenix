<?php
session_start();
?>

<!Doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title>Phoenix - Partenaires</title>

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

    <div class="row vertical-center">
      <div class="col-xs-12 col-sm-offset-2 col-sm-8">
        <h1 class="prevent-anchor-navbar-overlap centered-title">Nos partenaires</h1>
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="row vertical-center">
      <div class="col-xs-12 col-sm-offset-2 col-sm-4">
        <h3>Lipton Ice Tea</h3>
        <p>Partenaire du WEI 2016, Lipton Ice Tea est le leader sur le marché des thés glacés et offre des boissons gourmandes et rafraîchissantes. Venez découvrir les nouvelles saveurs Framboise et Tropical lors du WEI !<p>
        <a href="http://www.liptonicetea.com/">Découvrez toutes leurs saveurs</a>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img class="centered-image img-responsive" src="../images/partenaires/ice-tea.jpg">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="row vertical-center">
      <div class="col-xs-12 col-sm-offset-2 col-sm-4 col-sm-push-4">
        <h3>Isilines</h3>
        <p>Isilines est une compagnie de transport qui vous propose des places de bus pour n'importe quelle destination en France à partir de... 1€ !<p>
        <a href="http://www.isilines.fr/">Réservez votre prochain voyage</a>
      </div>
      <div class="col-xs-12 col-sm-4 col-sm-pull-4">
        <img class="centered-image img-responsive" src="../images/partenaires/isilines.png">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="row vertical-center">
      <div class="col-xs-12 col-sm-offset-2 col-sm-4">
        <h3>Auto-Ecole Clareva</h3>
        <p>Si vous souhaitez passer votre permis, l'auto-Ecole CER Clareva située à Evry près de Bras de Fer propose des prix avantageux pour les étudiants de TMSP. <br/>
        Le pack comprenant les frais d'inscritpion, le forfait code 6 mois, les présentations à l'examen du code, le livre de code, 20 leçons de conduite, la fiche de suivi et 1 présentation à l'examen du permis <em>est à 1299€ au lieu de 1379€</em>, avec l'évaluation de départ (40€), l'accès internet prepacode (50€), l'accès internet code sur mobile (20€) <em>offerts</em> et un départ possible des leçons de conduite sur le campus !  <p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img class="centered-image img-responsive" src="../images/partenaires/cer.png">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="row vertical-center">
      <div class="col-xs-12 col-sm-offset-2 col-sm-4 col-sm-push-4">
        <h3>Sécurité Routière</h3>
        <p>Parce que la sécurité routière est l'affaire de tous, le Ministère de l'Intérieur vous accompagne tout au lond de votre scolarité : entraînez vous pour votre permis, maîtrisez les règles élémentaires de prévention et adoptez une attitude responsable pour votre bien-être sur la route !</p>
        <a href="http://www.securite-routiere.gouv.fr/">Devenez un conducteur vigileant</a>
      </div>
      <div class="col-xs-12 col-sm-4 col-sm-pull-4">
        <img class="centered-image img-responsive" src="../images/partenaires/securite-routiere.jpg">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="row vertical-center">
      <div class="col-xs-12 col-sm-offset-2 col-sm-4">
        <h3>Le Weather Festival</h3>
        <p>Organisé par le collectif à l'origine de la Concrete, le Weather c'est <strong>le</strong> festival de musique électronique sur Paris. Que vous connaissiez les grands noms de la scène electro-techno, ou que vous vouliez simplement découvrir, profitez des réductions proposées en accord avec le BDE pour rejoindre les 20 000 autres adeptes dans un festival de folie!<p>
        <a href="http://www.weatherfestival.fr/programation">Découvrez la programmation</a>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img class="centered-image img-responsive" src="../images/partenaires/weather.png">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="row vertical-center">
      <div class="col-xs-12 col-sm-offset-2 col-sm-4 col-sm-push-4">
        <h3>Cinémas CGR</h3>
        <p>CGR est actuellement le 1er groupe d'exploitation cinématographique indépendant de France. Et parce qu'ils savent qu'un break est parfois nécessaire en milieu de semaine, Phoenix et le <a href="http://www.cgrcinemas.fr/evry/films-a-l-affiche/">cinéma CGR à Évry 2</a> vous proposent <em>tous les jeudis soir, à partir de 19h, des places à 5,50€</em> sur simple présentation de votre carte étudiante TMSP!<p>
      </div>
      <div class="col-xs-12 col-sm-4 col-sm-pull-4">
        <img class="centered-image img-responsive" src="../images/partenaires/cgr.png">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="row vertical-center">
      <div class="col-xs-12 col-sm-offset-2 col-sm-4">
        <h3>Costa coffee</h3>
        <p>Besoin de votre fix de caféine ou simplement envie de déguster le nouveau PopCorn Latte? Costa Coffee, la chaîne de cafés préférée des anglais, vous propose <em>une réduction de 10% sur toutes ses boissons et desserts</em>, sur présentation de votre carte étudiante TMSP.</p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img class="centered-image img-responsive" src="../images/partenaires/costa-coffee.png">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="row vertical-center">
      <div class="col-xs-12 col-sm-offset-2 col-sm-4 col-sm-push-4">
        <h3>Coiffeur Jean-Louis David d'Evry 2</h3>
        <p>Vous voulez vous refaire une beauté ? Pour changer de coupe de cheveux, allez au Coiffeur Jean-Louis David d'Evry 2 où les étudiants de TMSP profitent d'une <em>réduction de 10%</em> !<p>
      </div>
      <div class="col-xs-12 col-sm-4 col-sm-pull-4">
        <img class="centered-image img-responsive" src="../images/partenaires/jld.jpg">
      </div>
      <div class="col-sm-2"></div>
    </div>


    <div class="row vertical-center">
      <div class="col-xs-12 col-sm-offset-2 col-sm-4">
        <h3>Party Fiesta d'Evry 2</h3>
        <p>Une soirée déguisée au programme ? <a href="http://www.partyfiesta.com/fr/" alt = "party fiesta">Party Fiesta</a> à Evry 2 est l'endroit où vous trouverez votre bonheur ! En plus, vous pouvez bénéficier de <em>10% de réduction </em> sur présentation de votre carte étudiant. </p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <img class="centered-image img-responsive" src="../images/partenaires/partyfiesta.jpg">
      </div>
      <div class="col-sm-2"></div>
    </div>


    <div class="row vertical-center">
      <div class="col-xs-12 col-sm-offset-2 col-sm-4 col-sm-push-4">
        <h3>Skyn</h3>
        <p>Partenaire du WEI 2016, Skyn® et ses préservatifs en Polyisoprène vous procurent des sensations incroyablement naturelles et sensuelles.</p>
        <p>Ils vont donnent l'impression de ne rien porter, tant leur nouvelle matière les rend presque imperceptibles ! Et quoi de mieux que le WEI pour les essayer ?<p>
      </div>
      <div class="col-xs-12 col-sm-4 col-sm-pull-4">
        <img class="centered-image img-responsive" src="../images/partenaires/skyn.png">
      </div>
      <div class="col-sm-2"></div>
    </div>

  </div>

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

</html>
