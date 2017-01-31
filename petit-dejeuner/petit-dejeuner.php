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
        <a class="navbar-brand" href="../index.php">Phoenix</a>
      </div>
      <div class="collapse navbar-collapse" id="menu-smartphone">
        <ul class="nav navbar-nav navbar-right">
          <li> <a href="../index.php#programme" class="hidden-xs">Programme</a> </li>
          <li> <a href="../index.php#programme" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse">Programme</a> </li>
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
      <div class="col-sm-offset-2 col-sm-8">
        <div class="alert alert-success" role="alert">
          Les commandes de petit déjeuners sont maintenant <strong>fermées</strong>!
        </div>
        <p>Merci à tous pour vos commandes!</p>
      </div>
    </div>


  </div>

  <div class="footer push-to-bottom">
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
