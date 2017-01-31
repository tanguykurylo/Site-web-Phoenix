<?php

require('../configuration/captcha.php');
// grab recaptcha library
require_once('./recaptchalib.php');

// empty response
$response = null;

// check secret key
$reCaptcha = new ReCaptcha($secret);

$response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
);

if ($response == null || !$response->success) {
	?>
	<div class="alert alert-warning" role="alert">
		<strong>Captcha incorrect</strong>! Veuillez <a href="petit-dejeuner.php">ressayer</a>.
	</div>
	<?php
}
else{
  require('../configuration/database.php');
  try
  {
  $base_de_donnees = new PDO('mysql:host=localhost;dbname=obrgpe2k_utilisateurs;charset=utf8', $database_username, $database_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch(Exception $e)
  {
        die('Erreur : '.$e->getMessage());
  }

	$req = $petit_dejeuners->prepare('SELECT * FROM commandes WHERE adresse = :adresse');
	$req->execute(array(
	  'adresse' => strip_tags($_POST['adresse']),
	));

	if ($req->rowCount() != 0){
		$commande=$req->fetch();
		?>
			<div class="alert alert-danger" role="alert">
				Un commande au nom de <strong><?php echo $commande['prenom'] . ' ' . $commande['nom'] ; ?></strong> a déjà été effectuée pour l'adresse <?php echo $commande['adresse'] ; ?>!
			</div>
			Ce n'était pas vous? Envoyez nous un mail à <strong>webmaster@phoenix2016.fr</strong>
		<?php
	}
	else{
		$req->closeCursor();
		$req = $petit_dejeuners->prepare('SELECT * FROM commandes WHERE email = :email');
		$req->execute(array(
		  'email' => strip_tags($_POST['email']),
		));

		if ($req->rowCount() != 0){
			$commande=$req->fetch();
			?>
				<div class="alert alert-danger" role="alert">
					Un commande au nom de <strong><?php echo $commande['prenom'] . ' ' . $commande['nom'] ; ?></strong> a déjà été effectuée pour l'adresse email <?php echo $commande['email'] ; ?>!
				</div>
				Ce n'était pas vous? Envoyez-nous un mail à <strong>webmaster@phoenix2016.fr</strong>
			<?php
		}

		else{

			if (strip_tags($_POST['localisation']) == "maisel"){
				$req->closeCursor();
				$req = $petit_dejeuners->prepare('SELECT * FROM emails_eleves WHERE email = :email');
				$req->execute(array(
				  'email' => strtolower(strip_tags($_POST['email'])),
				));

				if ($req->rowCount() == 0){
					$commande=$req->fetch();
					?>
						<div class="alert alert-warning" role="alert">
							L'adresse email <strong><?php echo $_POST['email'] ; ?></strong> n'existe pas dans notre base de données! Êtes vous un étudiant de l'INT?
						</div>
						Vous êtes sûr de votre adresse email? Envoyez-nous un mail à <strong>webmaster@phoenix2016.fr</strong>
					<?php
				}
				else{
					$req->closeCursor();
					switch($_POST['commandeindividuelle'])
					{
						case 'anglais':
							$_POST['petit_dejeuner_anglais'] = 1;
							$_POST['petit_dejeuner_chinois'] = 0;
							$_POST['petit_dejeuner_int'] = 0;
						break;

						case 'chinois':
							$_POST['petit_dejeuner_anglais'] = 0;
							$_POST['petit_dejeuner_chinois'] = 1;
							$_POST['petit_dejeuner_int'] = 0;
						break;
						case 'int':
							$_POST['petit_dejeuner_anglais'] = 0;
							$_POST['petit_dejeuner_chinois'] = 0;
							$_POST['petit_dejeuner_int'] = 1;
						break;
					}
					include("ajout-de-commande.php");
				}
			}
			if (strip_tags($_POST['localisation']) == "paris"){
				$req->closeCursor();
				switch($_POST['commandeindividuelle'])
				{
					case 'anglais':
						$_POST['petit_dejeuner_anglais'] = 1;
						$_POST['petit_dejeuner_chinois'] = 0;
						$_POST['petit_dejeuner_int'] = 0;
					break;

					case 'chinois':
						$_POST['petit_dejeuner_anglais'] = 0;
						$_POST['petit_dejeuner_chinois'] = 1;
						$_POST['petit_dejeuner_int'] = 0;
					break;
					case 'int':
						$_POST['petit_dejeuner_anglais'] = 0;
						$_POST['petit_dejeuner_chinois'] = 0;
						$_POST['petit_dejeuner_int'] = 1;
					break;
				}
				include("ajout-de-commande.php");
			}
			if (strip_tags($_POST['localisation']) == "coloc"){
				$req->closeCursor();
				include("ajout-de-commande.php");
			}
		}
	}
}

?>
