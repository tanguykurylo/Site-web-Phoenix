<?php
session_start();
?>

<!Doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Phoenix</title>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!--Google Analytics Website Tracker -->


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Font-awesome icons -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- Google fonts stylesheets -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
    <link rel='stylesheet' type='text/css' href="https://fonts.googleapis.com/css?family=Lora">

    <!-- Chrome, Firefox OS and Opera custom adress bar color-->
    <meta name="theme-color" content="#99031C">
    <!-- Windows Phone custom adress bar color-->
    <meta name="msapplication-navbutton-color" content="#99031C">
    <!-- iOS Safari custom adress bar color-->
    <meta name="apple-mobile-web-app-status-bar-style" content="#99031C">


    <!-- Personnal stylesheets -->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="bungalows.css">

    <!-- Personnal scripts -->
    <script src="Inheritance.js"></script>
    <script src="bungalows.js"></script>
    <script>
        var nom_utilisateur = "<?php echo($_SESSION['nom']);  ?>" ;
        var prenom_utilisateur = "<?php echo($_SESSION['prenom']);  ?>" ;
        var Bungalows = [];
        var bungalowsData = [];
    </script>

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

    <div class="container">

    <div class="container extra-padding">
        <h1>Réservez votre bungalow</h1>
    </div>

    <?php
    $connected = isset($_SESSION['id']);

    function connectionALaBDD(){
      require('../configuration/database.php');
      try
      {
      $base_de_donnees = new PDO('mysql:host=localhost;dbname=obrgpe2k_utilisateurs;charset=utf8', $database_username, $database_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      }
      catch(Exception $e)
      {
            die('Erreur : '.$e->getMessage());
      }
    }

    if (!$connected){
        ?>
            <div class="alert alert-danger" role="alert">
              Vous devez être <strong>connecté</strong> pour acceder à cette fonctionnalité
            </div>
        <?php
    }
    else {
        $base_de_donnees = connectionALaBDD();
        $eleve_inscrit = $base_de_donnees->prepare('SELECT * FROM eleves_wei WHERE nom = :nom AND prenom = :prenom');
        $eleve_inscrit->execute(array(
          'nom' => strtolower($_SESSION['nom']),
          'prenom' => strtolower($_SESSION['prenom'])
        ));
        if ($eleve_inscrit->rowCount() < 1){
            ?>
            <div class="alert alert-danger" role="alert">
              Vous devez être <strong>inscrit au wei</strong> pour acceder à cette fonctionnalité
            </div>
            Vous êtes sûr d'être inscrit? <a href="../pages/contact-site-web.php">Contactez-nous</a>, nous reglerons votre problème.
            <?php
        }
        else {
            ?>
            <div class="modal fade" id="bungalow-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer"></div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <div id="bungalows-container"></div>
            <script>
                initializeBungalows();
            </script>
            <?php
        }
    }
    ?>

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
