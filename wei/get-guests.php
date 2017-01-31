<?php
header("Content-Type: text/plain");
require('../configuration/database.php');
try
{
$base_de_donnees = new PDO('mysql:host=localhost;dbname=obrgpe2k_utilisateurs;charset=utf8', $database_username, $database_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
      die('Erreur : '.$e->getMessage());
}
$guests = $base_de_donnees->prepare('SELECT * FROM eleves_wei WHERE bungalow_id = :bungalow_id');
$guests->execute(array(
'bungalow_id' => $_GET['bungalow_id']
));
if ($guests->rowCount() != 0){
    while($guest=$guests->fetch()){
        $response[]= $guest['prenom'].' '.$guest['nom'];
    }
    $guests->closeCursor();
    echo json_encode($response);
}
else {
    echo "[]";
}
?>
