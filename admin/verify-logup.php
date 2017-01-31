<?php
require('../configuration/database.php');

$inscription_est_valide = true;
$inscription_est_valide = verifierRecaptcha();
if($inscription_est_valide){
  $base_de_donnees = connectionALaBDD("obrgpe2k_utilisateurs", $database_username, $database_password);
  $inscription_est_valide = verifierEmail($base_de_donnees);
}
if($inscription_est_valide){
  ajouterUnEleve($base_de_donnees);
}


function verifierRecaptcha()
{
  $captcha_est_valide = true;
  require('../configuration/captcha.php');
  require_once('./recaptchalib.php'); // grab recaptcha library
  $response = null; // empty response
  $reCaptcha = new ReCaptcha($secret); // check secret key
  $response = $reCaptcha->verifyResponse(
          $_SERVER["REMOTE_ADDR"],
          $_POST["g-recaptcha-response"]);

  if ($response == null || !$response->success) {
    ?>
    <div class="alert alert-warning" role="alert">
      <strong>Captcha incorrect</strong>! Veuillez <a style="text-decoration: underline;" href="inscription.html">ressayer</a>.
    </div>
    <?php
    $captcha_est_valide = false;
  }

  return $captcha_est_valide;
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
    'email' => strip_tags(strtolower($_POST['email']))
  ));
  if ($emails_identiques->rowCount() != 0)
  {
    $email_est_valide = false;
  	$inscription = $emails_identiques->fetch();
  	?>
      <div class="alert alert-danger" role="alert">
        Un inscription au nom de <strong><?php echo $inscription['prenom'] . ' ' . $inscription['nom'] ; ?></strong> a déjà été effectuée pour l'adresse email <?php echo $inscription['email'] ; ?>!
      </div>
      <p>Ce n'était pas vous? Envoyez-nous un mail à <strong>webmaster@phoenix2016.fr</strong></p>
  	<?php
    $emails_identiques->closeCursor();
  }
  return $email_est_valide;
}

function ajouterUnEleve($base_de_donnees){
    ?>
      <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-6">
        <?php
            $pass_hache = sha1($_POST['password']);
            $nouvel_eleve = $base_de_donnees->prepare('INSERT INTO users(nom, prenom, email, password) VALUES(:nom, :prenom, :email, :password)');
            $nouvel_eleve->execute(array(
            'nom' => strip_tags($_POST['nom']),
            'prenom' => strip_tags($_POST['prenom']),
            'email' => strip_tags(strtolower($_POST['email'])),
            'password' => $pass_hache
            ));
            $nouvel_eleve->closeCursor();

            $login = $base_de_donnees->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
            $login->execute(array(
                'email' => strip_tags($_POST['email']),
                'password' => $pass_hache
            ));
            $resultat = $login->fetch();
            if ($resultat)
            {
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['email'] = $resultat['email'];
                $_SESSION['nom'] = $resultat['nom'];
                $_SESSION['prenom'] = $resultat['prenom'];
            }
        ?>
            <div class="alert alert-success" role="alert">
            <p><strong>C'est bon!</strong> Votre compte est activé.</p>
            </div>
            <a href="../index.php" >Retourner à la page d'acceuil</a>
      </div>
    <?php
}
?>
