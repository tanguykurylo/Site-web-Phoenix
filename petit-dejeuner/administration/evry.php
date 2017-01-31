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
  <link rel="stylesheet" href="../../CSS/style.css">


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
        <a class="navbar-brand" href="./commandes.php">Commandes</a>
      </div>
      <div class="collapse navbar-collapse" id="menu-smartphone">
        <ul class="nav navbar-nav navbar-right">
          <li> <a href="./maisel.php">Maisel</a> </li>
          <li> <a href="./evry.php">Évry</a> </li>
          <li> <a href="./paris.php">Paris</a> </li>
          <li> <a href="./toutes-les-commandes.php">Anciennes commandes</a> </li>
        </ul>
      </div>
    </div>

  </nav>

<?php
require('../../configuration/database.php');
  try
  {
    $base_de_donnees = new PDO('mysql:host=localhost;dbname=obrgpe2k_petit-dejeuners;charset=utf8', $database_username, $database_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch(Exception $e)
  {
          die('Erreur : '.$e->getMessage());
  }
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-offset-1 col-md-10">
          <h1 class="centered-title">Commandes Évry</h1>

          <div class="panel panel-default">
            <div class="panel-heading"><h2>Total des commandes</h2></div>
            <table class="table table-striped table-bordered table-hover">
              <tr>
                <td class="col-xs-4">English Breakfast</td>
                <td class="col-xs-4">Petit déjeuner Chinois</td>
                <td class="col-xs-4">INT Cass-Dalle</td>
              </tr>

              <tr>
                <td> <?php
                  $requete = $base_de_donnees->query('SELECT SUM(petit_dejeuner_anglais) as total_commandes FROM commandes WHERE localisation = \'coloc\'');
                  $total = $requete->fetch();
                  echo $total['total_commandes'];
                  $requete->closeCursor();
                  ?>
                </td>
                <td> <?php
                  $requete = $base_de_donnees->query('SELECT SUM(petit_dejeuner_chinois) as total_commandes FROM commandes WHERE localisation = \'coloc\'');
                  $total = $requete->fetch();
                  echo $total['total_commandes'];
                  $requete->closeCursor();
                  ?>
                </td>
                <td> <?php
                  $requete = $base_de_donnees->query('SELECT SUM(petit_dejeuner_int) as total_commandes FROM commandes WHERE localisation = \'coloc\'');
                  $total = $requete->fetch();
                  echo $total['total_commandes'];
                  $requete->closeCursor();
                  ?>
                </td>
              </tr>
            </table>
          </div>

          <?php
            $heure_premiere_livraison = 1454828400; // 7:00 Dimanche 7 février 2016 (heure du serveur à GMT)
            $heure_derniere_livraison = 1454860800; // 16:00 Dimanche 7 février 2016 (heure du serveur à GMT)
            $heure_actuelle = time();

            if ($heure_actuelle < $heure_premiere_livraison){
              $heure_prochaine_livraison = $heure_premiere_livraison ;
            }
            else{
              //on arrondit l'heure de la prochaine livraison au premier quart d'heure de l'heure actuelle
              $heure_prochaine_livraison = $heure_actuelle - ($heure_actuelle  % (15*60) );
            }

            for ($heure_livraison = $heure_prochaine_livraison; $heure_livraison <= $heure_derniere_livraison; $heure_livraison += (15*60) ){

              $heure_lisible = date("H:i", ($heure_livraison + (60*60) ) ); // on compense le décalage horaire du serveur (GMT+1 pour nous)

              $petit_dejeuners = $base_de_donnees->prepare('SELECT * FROM commandes WHERE heure_de_livraison = :h AND localisation = \'coloc\'');
              $petit_dejeuners->execute(array('h' => date('Y-m-d H:i:s', $heure_livraison)));

              if ($petit_dejeuners->rowCount() != 0){
                ?>
                <div class="panel panel-default">
                  <div class="panel-heading"><h2><?php echo $heure_lisible ; ?></h2></div>
                  <table class="table table-striped table-bordered table-hover">
                    <tr>
                      <td>Nom</td>
                      <td>Prénom</td>
                      <td>Téléphone</td>
                      <td>English</td>
                      <td>Chinois</td>
                      <td>INT</td>
                      <td>Adresse</td>
                      <td>Remarques</td>
                    </tr>

                    <?php

                    while($commande=$petit_dejeuners->fetch()){

                      ?>
                              <tr>
                                <td class="col-xs-1"><?php echo $commande['nom'] ; ?></td>
                                <td class="col-xs-1"><?php echo $commande['prenom'] ; ?></td>
                                <td class="col-xs-1"><?php echo $commande['telephone'] ; ?></td>
                                <td class="col-xs-1"><?php echo $commande['petit_dejeuner_anglais'] ; ?></td>
                                <td class="col-xs-1"><?php echo $commande['petit_dejeuner_chinois'] ; ?></td>
                                <td class="col-xs-1"><?php echo $commande['petit_dejeuner_int'] ; ?></td>
                                <td class="col-xs-3"><?php echo $commande['adresse'] ; ?></td>
                                <td class="col-xs-2"><?php echo $commande['remarques'] ; ?></td>
                              </tr>

                      <?php
                    }
                    ?>
                    </table>
                  </div> <!-- panel -->
                  <?php
                }
              $petit_dejeuners->closeCursor();
            }

          ?>


      </div> <!-- col-->
    </div> <!-- row -->
  </div> <!-- container-fluid -->

</body>

</html>
