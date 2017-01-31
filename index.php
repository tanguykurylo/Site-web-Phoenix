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


    <!-- Personnal stylesheet -->
    <link rel="stylesheet" href="./CSS/style.css">

    <!-- Other stylesheets -->
    <link href="./CSS/parallax.css" rel="stylesheet">


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
                <a class="navbar-brand" href="./index.php">Phoenix</a>
            </div>
            <div class="collapse navbar-collapse" id="menu-smartphone">
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="./index.php#programme" class="hidden-xs">Programme</a> </li>
                    <li> <a href="./index.php#programme" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse">Programme</a> </li>
                    <li> <a href="./pages/membres.php">Membres</a> </li>
                    <li> <a href="./pages/partenaires.php">Partenaires</a> </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pougnes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./pages/pougnes-tsp.php">TSP</a></li>
                            <li><a href="./pages/pougnes-tem.php">TEM</a></li>
                        </ul>
                    </li>
                    <li> <a href="./pages/contact.php">Contact</a> </li>
                    <li>
                        <?php
                        if (isset($_SESSION['nom']) AND isset($_SESSION['prenom']))
                        {
                            ?>
                            <a href="" data-toggle="modal" data-target="#account-modal">
                            <?php
                            echo ($_SESSION['prenom'].' '.$_SESSION['nom']); //TODO name to upercase and person icon
                        }
                        else {
                            ?>
                            <a href="" data-toggle="modal" data-target="#login-modal">
                            <?php
                            echo 'Connexion' ;
                        }
                        ?>
                    </a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="login-modal" tabindex="-2" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Connexion</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="admin/login.php" class="form-horizontal">

                        <div class="form-group">
                            <label for="login-email" class="control-label col-sm-3">Email TEM/TSP</label>
                            <div class="col-sm-9">
                                <input type="email" pattern="[-a-z]+\.[-_a-z]+@telecom-(sudparis|em)\.eu" class="form-control" id="login-email" name="login-email" placeholder="prenom.nom@telecom-sudParis/em.eu" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="login-password" class="control-label col-sm-3">Mot de passe</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">Connexion</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="./admin/inscription.html">Je n'ai pas de compte</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="account-modal" tabindex="-3" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Mon compte</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning" role="alert">
                        Développement en cours
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="./admin/logout.php" method="get">
                        <input type="submit" class="btn btn-danger" value="Déconnexion">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax">
        <div class="container">
            <div class="col-md-12">
                <h1>PHOENIX</h1>
                <p>BDE TMSP 2016</p>
            </div>
        </div>
        <img src="images/down-arrow.svg" width="50px" id="scroll-down-indicator">
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-offset-2 col-sm-8 ">
                <h1>LE BDE</h1>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row">
            <div class="col-sm-offset-2 col-sm-8 ">
                <img src="./images/logo.png" class="centered-image image-margin img-responsive">
                <h2>Un BDE unique</h2>
                <p>
                    Phoenix est un BDE composé à moitié de TEM et à moitié de TSP, né de l'idée d'un groupe d'amis rencontrés au WEI. Chaque membre a choisi de lister pour ses affinités avec les autres membres et ses talents personnels, apportant à la liste une cohesion
                    et une diversité sans pareil.
                </p>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row">
            <div class="col-sm-offset-2 col-sm-8 ">
                <h2>Destination: une année de folie</h2>
                <p>
                    Pour nous, un seul but: enflammer l'INT! Nous voulons faire en sorte que la vie y soit géniale: que les étudiants ressortent de nos soirées complètement essouflés mais heureux; qu'ils passent les meilleurs jours de leur vie lorsqu'ils voyagent avec nous;
                    qu'ils puissent profiter de partenariats intéressants pour leur projets personnels, associatifs ou professionnels; qu'ils puissent participer aux décisions relatives à leurs cours et leurs associations. Ce que nous voulons, c'est simple
                    : le meilleur pour l'INT.
                </p>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <!-- container-fluid -->

    <div class="dark-background">

        <div class="container-fluid">

            <div class="row prevent-anchor-navbar-overlap ">
                <div class="col-sm-offset-2 col-sm-8 ">
                    <h2 id="programme" class="centered-title">Programme</h2>
                </div>
                <div class="col-sm-2"></div>
            </div>

            <div class="row">

                <div class="col-sm-offset-1 col-sm-5 ">
                    <h3>Pôle Présidence</h3>
                    <p> Notre rôle, nos objectifs : <br/>
                        <ul>
                            <li>Faire perdurer l’importance de la vie associative au sein de l’école</li>
                            <li>Être à l’écoute de chacune des demandes des élèves</li>
                            <li>Être à disposition de chacune des associations</li>
                            <li>Garder de bonnes relations avec l’administration</li>
                            <li>Organiser des évènements sur le campus</li>
                            <li>Intégrer les passerelles 2A et les étrangers</li>
                            <li>Augmenter le nombre de cotisants BDE</li>
                        </ul>
                        <br/> Une de nos priorités : la sécurité du campus. Nous tâcherons de trouver des solutions avec l’administration pour que le campus soit un lieu sécurisé sans contraindre inutilement les élèves, afin que le foyer ne manque pas
                        de vigilance.<br/><br/> Nous voulons faire vivre ce campus et permettre à chaque élève d’y trouver son bonheur pour que ses années à TSP/TEM soient quelque chose de marquant dans sa vie.</p>
                </div>

                <div class=" col-sm-5 ">
                    <h3>Pôle Soirée</h3>
                    <p>Depuis le début de l'année, nous essayons de mettre un maximum d'ambiance aux soirées. Nous vous révelons donc aujourd'hui en exclusivité notre:</p>
                    <h4>Recette pour une soirée beaucoup trop fat</h4>
                    <ul>
                        <li>Des prestations de DJs exterieurs sur le campus, avec la programmation votée par les élèves</li>
                        <li>Des navettes depuis Evry jusqu’à des boites de nuit proposant des tarifs de folie pour les étudiants de l'INT </li>
                        <li>Des soirées communes avec les autres écoles d'Évry, mais aussi avec l’université Paris-Saclay et l’Institut Mines-Telecom</li>
                        <li>L'engagement d'une nouvelle boisson originale par soirée BDE</li>
                        <li>Des Open Bonbons</li>
                        <li>Un soupson de folie</li>
                    </ul>
                    <p>Touillez, rajouttez des élèves très très chauds, votre soirée est prête!</li>
                </div>

                <div class="col-sm-1"></div>

            </div>

            <div class="row">

                <div class="col-sm-offset-1 col-sm-5 ">
                    <h3>Pôle SWEI</h3>
                    <p>La surprise arrive bientôt!</p>
                </div>

                <div class="col-sm-5 ">
                    <h3>Pôle WED</h3>
                    <p>Lieu:
                        <ul>
                            <li>Départ le vendredi soir vers 21h de Evry</li>
                            <li>Retour pour le dimanche soir environ 21h</li>
                            <li>Grand gîte, complètement isolé</li>
                            <li>Piscine</li>
                        </ul>
                        Dates: 27/05 au 29/05 ou du 05/06 au 07/06 <br> Activités:
                        <ul>
                            <li>Beer-pong Contest</li>
                            <li>Chasse au trésor</li>
                            <li>Activités aquatique</li>
                            <li>Activités détente autour d’une bonne bière bien fraîche</li>
                            <li>Stand de nourriture</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-1"></div>

            </div>

            <div class="row">

                <div class="col-sm-offset-1 col-sm-5 ">
                    <h3>Pôle Pougnes</h3>
                    <p>Les pougnes perdureront au S2.</br>
                        Nous ferons en sorte de vous proposer des reliures pour les dossiers.</br>
                        Nous mettrons à disposition des calculatrices dans le local BDE pour les personnes en panne à la dernière minute.</br>
                        Nous organiserons des groupes de niveau pour réviser.</p>
                </div>

                <div class=" col-sm-5 ">
                    <h3>Pôle Sécu-Log</h3>
                    <p>
                        La campagne approche, et voici que débute ma garde. Jusqu'à ma mort, je la monterai. Je ne prendrai femme, ne tiendrai terres, n'engendrerai. J'organiserai des opés moquettes, et moquetterai de jour comme de nuit. Je vivrai et mourrai à mon poste. Je
                        suis l'épée dans l'INT. Je suis le veilleur au foyer. Je suis la tenture ignifugée, le rouleau de gaffeur, le tourniquet U6, le bouclier protecteur des locaux INTiens. Je voue mon existence et mon honneur à l'école, je les lui
                        voue pour cette nuit-ci comme pour toutes les nuits à venir.
                    </p>
                </div>

                <div class="col-sm-1"></div>

            </div>

            <div class="row">

                <div class="col-sm-offset-1 col-sm-5 ">
                    <h3>Pôle Trésorerie</h3>
                    <p>Nous nous engageons à contrôler et gérer les comptes du bde. Mais également à attribuer des budgets adéquats à chaque club du bde afin de faire perdurer l'importance de la vie associative de l'école</p>
                </div>

                <div class=" col-sm-5 ">
                    <h3>Pôle Communication</h3>
                    <p>
                        Nous nous engageons à faire une communication toujours plus belle, efficace et innovante pour la liste Phoenix. Nous nous engageons également à être disponibles pour aider ceux qui en ont besoin.
                    </p>
                </div>

                <div class="col-sm-1"></div>

            </div>

            <div class="row">

                <div class="col-sm-offset-1 col-sm-5">
                    <h3>Pôle Secrétariat</h3>
                    <p>Je serais disponible et à l'écoute des associations pour faire remonter les eventuels problèmes et en parler avec l'adm, je serais presente a toute les reunions pour permettre une certaine transparence pour l'adm pour améliorer nos
                        relations avec elle pour qu'elle soit plus flexible.</p>
                </div>

                <div class=" col-sm-5">
                    <h3>Pôle Relation Entreprise</h3>
                    <p>
                        Un des fonctions importantes du BDE est d'aider les élèves à trouver des stages et établir des contacts professionnels pour leur vie post-INT.</br>
                        Nous organiserons des événements pro innovants en rapport avec les nouvelles technologies.<br> Nous continuerons à proposer des amphis de relectures de CV et de présentations d'entreprises en essayant de les rendre plus attrayant.<br>                        Nous nous interresserons à des entreprises autres que du conseil : technologies, finance, recherche + marketing + vente en lien avec les domaines électroniques, image...</br> Et bien sûr les événements campus avec leurs partenariats
                        traiteur!
                    </p>
                </div>

                <div class="col-sm-1"></div>

            </div>

            <div class="row">

                <div class="col-sm-offset-1 col-sm-5 ">
                    <h3>Pôle Web</h3>
                    <p>
                        <ul>
                            <li>Reprendre la page rassemblant les descriptions des assos pour leur offrir plus de visibilité et faciliter leur découverte. (associations.it-sudparis.eu date de <em>2006!</em>)</li>
                            <li>Mettre en ligne un emploi du temps et un calendrier de la vie associative.</li>
                            <li>Améliorer la communication entre les élèves ayant des compétences en web et les associations ayant un projet.</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-5 ">
                    <h3>Pôle Voyage</h3>
                    <p>Voici la liste des voyages que nous allons effectuer pour l’année 2016-2017 :
                        <ul>
                            <li>Lisbonne : 15-16 octobre</li>
                            <li>Varsovie : 12-13 novembre</li>
                            <li>Berlin : 7-8 janvier</li>
                        </ul>
                    </p>
                </div>

                <div class="col-sm-1"></div>

            </div>

        </div>
        <!-- container-fluid -->

    </div>
    <!-- dark-background -->

    <div class="footer">
        <div class="container-fluid">
            <div class=" col-sm-6">
                <p>Fait avec amour par le pôle web de <em>Phoenix</em>.</p>
            </div>
            <div class=" col-sm-6">
                <p>Un problème avec le site? <a href="./pages/contact-site-web.php">Contactez-nous</a>.</p>
            </div>
        </div>
    </div>

</body>

</html>
