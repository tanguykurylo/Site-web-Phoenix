<?php
session_start();
?>

<!Doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>Pougnes TSP</title>

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
		<div class="col-xs-12 col-md-offset-4 col-md-4">
			<h1>Pougnes TSP</h1>
			Le <a href="https://drive.google.com/folderview?id=0B5_oWsBWoxElTTQyYmlwQjl2MHM&usp=sharing">Google Drive</a>  est mis à jour plus régulièrement pour le moment.
		</div>

	</div>

	<div class="row">
		<div class="col-xs-12">
			<h2>Informatique</h2>
			<div class="row">

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Algorithmique et langage de programmation</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/CSC/3101/Java.pdf">Programmation orientée objet avec JAVA</a><br>
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Introduction aux systèmes d'exploitation</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/CSC/3102/pougneCSC3102.pdf">Mémento par Phoenix...</a><br>
					<a href="http://www-inf.telecom-sudparis.eu/COURS/CSC3102/Supports/unix.html?page=annexe-shell">...Mémento par les profs de TSP</a><br>
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Modélisation, bases de données et systèmes d'information</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/CSC/3601/coursIntroBDD.pdf">Fiche - Introduction CSC 3601</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/CSC/3601/ficheBDD.pdf">Fiche - Bases de données (fiche)</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/CSC/3601/coursRedigeLangagesRelationnels.pdf">Cours rédigé - Langages relationnels</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/CSC/3601/coursRedigeModeleRelationnelDonnees.pdf">Cours rédigé - Modèle relationnels (cours rédigé)</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/CSC/3601/td1.pdf">TD1 - Modélisation de bases de données</a><br>        <a href="http://phoenix2016.fr/pougnes-tsp/CSC/3601/qcmDesBDDpourquoi.pdf">QCM - Des bases de données, pour quoi faire? (travail hors-présentiel 1)</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/CSC/3601/qcmModeleRelationnel.pdf">QCM - Modèle relationnel (travail hors-présentiel 1)</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/CSC/3601/qcmAlgebreRelationnelle.pdf">QCM - Algèbre relationnelle (travail hors-présentiel 2)</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/CSC/3601/qcmSelectSchemaComplexe.pdf">QCM - SELECT sur un schéma plus complexe (travail hors-présentiel 3)</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/CSC/3601/qcms.pdf">QCMs - Correction partielle (travaux hors-présentiels 1 à 3)</a><br>
				</div>

			</div> <!--row -->
		</div>
	</div> <!-- row -->

	<div class="row">
		<div class="col-xs-12">
			<h2>Réseaux</h2>
			<div class="row">

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Réseaux de télécom. fixes et mobiles</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/NET/3101/R%C3%A9seaux%20de%20t%C3%A9l%C3%A9com%20fixe%20et%20mobile.pdf">Réseaux de télécom. fixes et mobiles</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/NET/3101/TD1%20+%20Correction.pdf">TD RTFM Corrigé</a><br>
					<!--LIEN MORTs, remettre les fichier...a href="http://phoenix2016.fr/pougnes-tsp/NET/3101/QCMs.pdf">QCMs</a><br-->
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Réseaux de données</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/NET/3102/R%C3%A9seaux%20de%20donn%C3%A9es.pdf">Réseaux de données</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/NET/3102/TD%20Protocole%20IP.pdf">TD Protocole IP</a>
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Performances de réseaux</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/NET/3601/pougneNET3601.pdf">Performances de réseaux</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/NET/3601/PolyCorriges-1.pdf">Exos corrigés sur les files d'attente</a>
				</div>

			</div> <!--row -->
		</div>
	</div> <!-- row -->

	<div class="row">
		<div class="col-xs-12">
			<h2>Signal</h2>
			<div class="row">

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Probabilités</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/SIC/3101/pougneSIC3101.pdf">Probabilités</a>
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Théorie du signal</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/SIC/3601/pougneSIC3601.pdf">Signal (fiche de cours)</a><br>
					<!--a href="http://phoenix2016.fr/pougnes-tsp/SIC/3601/pougneSIC3601questionsCours.pdf">Correction questions de cours</a-->
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Théorie des communications</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/SIC/3602/pougneSIC3602.pdf">Théorie des communications</a><br>
				</div>

			</div> <!--row -->
		</div>
	</div> <!-- row -->

	<div class="row">
		<div class="col-xs-12">
			<h2>Physique</h2>
			<div class="row">

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Systèmes et fonctions électroniques</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/PHY/3101/Syst%C3%A8mes%20et%20fonctions%20%C3%A9lectroniques.pdf">Électronique (diodes, transistors, quadripôles)</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/PHY/3101/Microcontr%C3%B4leur.pdf">Microcontroleurs</a>
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Hyperfréquences</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/PHY/3102/pougnePHY3102.pdf">Hyperfréquences</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/PHY/3102/Sujet%202015%20+%20correction.pdf">CF 2015</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/PHY/3102/Sujet%202014%20+%20correction.pdf">CF 2014</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/PHY/3102/Sujet%202013%20+%20correction.pdf">CF 2013</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/PHY/3102/Sujet%202008%20+%20correction.pdf">CF 2008</a>
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Systèmes de transmission optique</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/PHY/3601/pougnePHY3601.pdf">Systèmes de transmission optique</a>
				</div>

			</div> <!--row -->
		</div>
	</div> <!-- row -->

	<div class="row">
		<div class="col-xs-12">
			<h2>Mathématiques</h2>
			<div class="row">

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Éléments d'analyse et intégration</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/MAT/3101/pougneMAT3101.pdf">Éléments d'analyse et intégration</a><br><!-- Ou la définition de la persistence-->
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Statistique et Analyse de données</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/MAT/3601/pougneMAT3601a.pdf">Statistique</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/MAT/3601/pougneMAT3601b.pdf">Analyse de données</a><br>
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Optimisation</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/MAT/3602/pougneMAT3602.pdf">Optimisation</a>

				</div>

			</div> <!--row -->
		</div>
	</div> <!-- row -->

	<div class="row">
		<div class="col-xs-12">
			<h2>Managment et sciences de l'entreprise</h2>
			<div class="row">

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Gestion financière et marketing</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/MGT/3101/Gestion%20financi%C3%A8re.pdf">Gestion financière</a><br>
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Droit de l'entreprise</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/MGT/3601/pougneMGT3601.pdf">Droit de l'entreprise</a><br>
				</div>

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Performance économique et qualité</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/MGT/3602/Plan détaillé-MGT3602-2015-16.pdf">Plan du cours d'économie</a><br>
					<a href="http://phoenix2016.fr/pougnes-tsp/MGT/3602/pougneMGT3602.pdf">Performance économique et qualité</a><br>
				</div>

			</div> <!--row -->
		</div>
	</div> <!-- row -->

	<div class="row">
		<div class="col-xs-12">
			<h2>Séminaires</h2>
			<div class="row">

				<div class="col-xs-12 col-md-6 col-lg-4">
					<h3>Dévelopement durable</h3>
					<a href="http://phoenix2016.fr/pougnes-tsp/DIV/3102/D%C3%A9velopement%20durable.pdf">Dévelopement durable</a><br>
				</div>

			</div> <!--row -->
		</div>
	</div> <!-- row -->

	</div>


	<div class="footer">
		<div class="container-fluid">
			<div class="col-xs-12 col-sm-6">
				<p>Fait avec amour par le pôle web de <em>Phoenix</em>.</p>
			</div>
			<div class="col-xs-12 col-sm-6">
				<p>Un problème avec le site? <a href="http://phoenix2016.fr/pages/contact-site-web.php">Contactez-nous</a>.</p>
			</div>
		</div>
	</div>

</body>

</html>
