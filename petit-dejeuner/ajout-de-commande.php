<?php
$req = $petit_dejeuners->prepare('INSERT INTO commandes(nom, prenom, email, telephone, petit_dejeuner_anglais, petit_dejeuner_chinois, petit_dejeuner_int, localisation, adresse, heure_de_livraison, remarques) VALUES(:nom, :prenom, :email, :telephone, :petit_dejeuner_anglais, :petit_dejeuner_chinois, :petit_dejeuner_int, :localisation, :adresse, :heure_de_livraison, :remarques)');
$req->execute(array(
  'nom' => strip_tags($_POST['nom']),
  'prenom' => strip_tags($_POST['prenom']),
  'email' => strip_tags($_POST['email']),
  'telephone' => strip_tags($_POST['telephone']),
  'petit_dejeuner_anglais' => strip_tags($_POST['petit_dejeuner_anglais']),
  'petit_dejeuner_chinois' => strip_tags($_POST['petit_dejeuner_chinois']),
  'petit_dejeuner_int' => strip_tags($_POST['petit_dejeuner_int']),
  'localisation' => strip_tags($_POST['localisation']),
  'adresse' => strip_tags($_POST['adresse']),
  'heure_de_livraison' => date('Y-m-d H:i:s', strip_tags($_POST['heure_de_livraison'])),
  'remarques' => strip_tags($_POST['remarques'])
));
$req->closeCursor();

?>
<div class="alert alert-success" role="alert">
  <strong>C'est bon!</strong> Votre commande a bien été enregistrée.
</div>
<p>Nous vous remercions d'avoir commandé votre petit déjeneur chez Phoenix!</p>

<a href="../index.php">Retour à la page d'acceuil</a>
<?php
?>
