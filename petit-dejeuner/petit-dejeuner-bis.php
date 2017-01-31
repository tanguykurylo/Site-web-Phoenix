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

  <!--Google Recaptcha -->
  <script src='https://www.google.com/recaptcha/api.js?hl=fr'></script>

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
        <a class="navbar-brand" href="../home.html">Phoenix</a>
      </div>
      <div class="collapse navbar-collapse" id="menu-smartphone">
        <ul class="nav navbar-nav navbar-right">
          <li> <a href="../home.html#programme" class="hidden-xs">Programme</a> </li>
          <li> <a href="../home.html#programme" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse">Programme</a> </li>
          <li> <a href="../pages/membres.html">Membres</a> </li>
          <li> <a href="../pages/partenaires.html">Partenaires</a> </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pougnes<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../pages/pougnes-tsp.html">TSP</a></li>
              <li><a href="../pages/pougnes-tem.html">TEM</a></li>
            </ul>
            <li > <a href="../pages/contact.html">Contact</a> </li>
          </li>
        </ul>
      </div>
    </div>

  </nav>

  <div class="container fluid">

    <div class="row">
      <h1>Petit déjeuner</h1>
    </div>

    <div class="row">
      <h2>Les formules</h2>
    </div>

    <div class="row">

      <div class="col-md-4">
        <h3>English Breakfast</h3>
        <img class="centered-image" src="../images/petit-dejeuner/scones-rupture.jpg" />
        <ul>
          <li>Scones à la confiture ou au nutella</li>
          <li>Gâteau au citron, pomme, chocolat ou flan patissier</li>
          <li>Thé anglais ou café</li>
          <li>Smoothies</li>
        </ul>
      </div>

      <div class="col-md-4">
        <h3>Petit déjeuner Chinois</h3>
        <img class="centered-image" src="../images/petit-dejeuner/sushis.jpg" />
        <p>(parce que c'est bientôt le nouvel an...chinois)</p>
        <ul>
          <li>Soupe Miso</li>
          <li>Makis au thon et au surimi</li>
          <li>Biscuits à la noix de coco</li>
        </ul>
      </div>

      <div class="col-md-4">
        <h3>INT Casse-dalle</h3>
        <img class="centered-image" src="../images/petit-dejeuner/tartiflette.jpg" />
        <ul>
          <li>Tartiflette savoyarde</li>
          <li>Chocolat chaud</li>
          <li>Crumble à la banane</li>
        </ul>
      </div>

    </div>

    <div class="row">
      <h2>Votre commande</h2>
    </div>

    <form method="post" action="cible.php" class="col-xs-12 col-sm-offset-2 col-sm-8 form-horizontal">

      <fieldset>
        <legend>Informations personelles</legend>

        <div class="form-group">
          <label for="nom" class="control-label col-sm-3">Nom</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
          </div>
        </div>

        <div class="form-group">
          <label for="prenom" class="control-label col-sm-3">Prénom</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" required>
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="control-label col-sm-3">Email TEM/TSP</label>
          <div class="col-sm-9">
            <input type="email" pattern="(?i)[a-z]+\.[_a-z]+@telecom-(sudParis|em)\.eu" class="form-control" id="email" name="email" placeholder="etudiant/vieux@telecom-sudParis/em.eu" required>
          </div>
        </div>

        <div class="form-group">
          <label for="telephone" class="control-label col-sm-3">Téléphone</label>
          <div class="col-sm-9">
            <input type="tel" pattern="0[1-9]([ ]?[0-9]{2}){4}" class="form-control" id="telephone" name="telephone" placeholder="06 69 69 69 69" required>
          </div>
        </div>

      </fieldset>

      <fieldset>
        <legend>Livraison</legend>

        <div class="col-sm-offset-3 col-sm-9">

          <div class="checkbox">
            <label for="maisel" class="control-label">
              <input type="radio" id="maisel" name="localisation" value="maisel"  checked="checked" />
              J'habite à la Maisel.
            </label>
          </div>

          <div class="checkbox">
            <label for="coloc" class="control-label">
              <input type="radio" id="coloc" name="localisation"  value="coloc" />
              J'habite en coloc à Evry.
            </label>
          </div>

          <div class="checkbox">
            <label for="paris" class="control-label">
              <input type="radio" id="paris" name="localisation"  value="paris" />
              J'habite à Paris.
            </label>
          </div>

        </div>

        <div class="form-group">
          <label for="adresse" class="control-label col-sm-3">Adresse de livraison</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="N° d'appartement maisel ou Adresse" required>
          </div>
        </div>

        <div class="form-group">
          <label for="heure_de_livraison" class="control-label col-sm-3">Heure de livraison</label>
          <div class="col-sm-9">
            <select class="form-control" id="heure_de_livraison" name="heure_de_livraison">
              <?php include("heure-de-livraison.php"); ?>
            </select>
          </div>
        </div>

      </fieldset>

      <fieldset>
        <legend>Commande</legend>

        <div id="commandeindividuelle" class="col-sm-offset-3 col-sm-9">

        <!--
          <div class="checkbox">
            <label for="anglais" class="control-label">
              <input type="radio" id="anglais" name="commandeindividuelle" value="anglais" checked="checked" />
              English Breakfast
            </label>
          </div>
        -->

          <div class="checkbox">
            <label for="chinois" class="control-label">
                <input type="radio" id="chinois" name="commandeindividuelle"  value="chinois" />
              Petit déjeuner chinois
            </label>
          </div>

          <div class="checkbox">
            <label for="int" class="control-label">
              <input type="radio" id="int" name="commandeindividuelle" value="int" checked="checked"/>
              INT Casse-dalle
            </label>
          </div>

        </div> <!-- commandeindividuelle -->

        <div id="commandegroupe">


          <!--
          <div class="form-group">
            <label for="petit_dejeuner_anglais" class="control-label col-sm-3">English Breakfast</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="petit_dejeuner_anglais" name="petit_dejeuner_anglais" min="0" max="15" placeholder="Quantity">
            </div>
          </div>
          -->

          <div class="form-group">
            <label for="petit_dejeuner_chinois" class="control-label col-sm-3">Petit déjeuner Chinois</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="petit_dejeuner_chinois" name="petit_dejeuner_chinois" min="0" max="15" placeholder="数量">
            </div>
          </div>

          <div class="form-group">
            <label for="petit_dejeuner_int" class="control-label col-sm-3">INT Casse-Dalle</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="petit_dejeuner_int" name="petit_dejeuner_int" min="0" max="15" placeholder="Combien, chef?">
            </div>
          </div>

          <p>Soyez sympa, ne prenez pas plus d'un menu par personne dans la coloc. ;)</p>

        </div> <!-- commandegroupe -->

        <div class="form-group">
          <label for="textArea" maxlength="500" class="control-label col-sm-3">Remarques</label>
          <div class="col-sm-9">
            <textarea class="form-control" rows="3" id="remarques" name="remarques" placeholder="Des envies particulières? Des remarques quant à la livraison? Dites-nous comment nous pouvons vous aider!"></textarea>
          </div>
        </div>

      </fieldset>

      <div class="g-recaptcha col-sm-offset-3 col-sm-9" data-sitekey="6LdlhRcTAAAAAKntQxRYIo2VWcbqvoHyzbotxEME"></div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Commander</button>
        </div>
      </div>

    </form>
  </div>

  <div class="footer">
    <div class="container">
      <div class="col-xs-12 col-sm-6">
        <p>Fait avec amour par le pôle web de <em>Phoenix</em>.</p>
      </div>
      <div class="col-xs-12 col-sm-6">
        <p>Un problème avec le site? <a href="../pages/contact-site-web.html">Contactez-nous</a>.</p>
      </div>
    </div>
  </div>

  <script src="radioshow.js"></script>


</body>
