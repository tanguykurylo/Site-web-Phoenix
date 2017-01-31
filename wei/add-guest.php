<?php
require('../configuration/database.php');
try
{
$base_de_donnees = new PDO('mysql:host=localhost;dbname=obrgpe2k_utilisateurs;charset=utf8', $database_username, $database_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
      die('Erreur : '.$e->getMessage());
}
$new_guest = $base_de_donnees->prepare('UPDATE eleves_wei SET bungalow_id = :bungalow_id WHERE nom = :nom AND prenom = :prenom');
$new_guest->execute(array(
'bungalow_id' => $_GET['bungalow_id'],
'nom' => $_GET['nom'],
'prenom' => $_GET['prenom']
));
?>
