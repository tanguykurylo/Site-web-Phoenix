<?php
require('../configuration/database.php');

$login_est_valide = true;
if($login_est_valide){
  $base_de_donnees = connectionALaBDD("obrgpe2k_utilisateurs", $database_username, $database_password);
  $login_est_valide = verifierEmail($base_de_donnees);
}
if($login_est_valide){
  $login_est_valide =  verifierMotDePasse($base_de_donnees);
}
if($login_est_valide){
  connection($base_de_donnees);
}


function connectionALaBDD($nomBDD, $database_username, $database_password){
  try
  {
    $base_de_donnees = new PDO('mysql:host=localhost;dbname='.$nomBDD.';charset=utf8', $database_username, $database_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch(Exception $e)
  {
          die('Erreur : '.$e->getMessage());
  }
  return $base_de_donnees;
}

function verifierEmail($base_de_donnees){
  $email_est_valide = true;

  $emails_identiques = $base_de_donnees->prepare('SELECT * FROM users WHERE email = :email');
  $emails_identiques->execute(array(
    'email' => strip_tags(strtolower($_POST['login-email']))
  ));
  if ($emails_identiques->rowCount() != 1)
  {
    $email_est_valide = false;
  	?>
      <div class="alert alert-danger" role="alert">
        Aucun compte pour l'adresse email : <?php echo($_POST['login-email']); ?>
    </div>
  	<?php
    $emails_identiques->closeCursor();
  }
  return $email_est_valide;
}

function verifierMotDePasse($base_de_donnees){
    $mot_de_passe_est_valide  = true;
    $login_correct = $base_de_donnees->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
    $login_correct->execute(array(
        'email' => strip_tags($_POST['login-email']),
        'password' => sha1($_POST['login-password'])
    ));
    $resultat = $login_correct->fetch();

    if (!$resultat)
    {
        $mot_de_passe_est_valide = false;
        ?>
        <div class="alert alert-danger" role="alert">
            <strong>Mot de passe incorrect</strong>
        </div>
        <?php
    }
    return $mot_de_passe_est_valide;
}

function connection($base_de_donnees) {
    $login = $base_de_donnees->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
    $login->execute(array(
        'email' => strip_tags($_POST['login-email']),
        'password' => sha1($_POST['login-password'])
    ));
    $resultat = $login->fetch();
    if ($resultat)
    {
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['email'] = $resultat['email'];
        $_SESSION['nom'] = $resultat['nom'];
        $_SESSION['prenom'] = $resultat['prenom'];
        ?>
        <div class="alert alert-success" role="alert">
            Vous êtes connecté : Bonjour <?php echo($_SESSION['prenom'].' '.$_SESSION['nom']); ?> !
        </div>
        <?php
    }
}



?>
