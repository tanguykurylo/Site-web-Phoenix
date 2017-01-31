<?php

$heure_premiere_livraison = 1454828400; // 7:00 Dimanche 7 février 2016 (heure du serveur à GMT)
$heure_derniere_livraison = 1454860800; // 16:00 Dimanche 7 février 2016 (heure du serveur à GMT)
$heure_actuelle = time();

if ($heure_actuelle < $heure_premiere_livraison - (60*60) ) { // on se laisse une heure de marge pour la premiere livraison
  $heure_prochaine_livraison = $heure_premiere_livraison;
}
else{
  //on arrondit l'heure de la prochaine livraison au premier quart d'heure de l'heure suivante
  $heure_prochaine_livraison = $heure_actuelle - ($heure_actuelle  % (15*60) )  + (60*60);
}

for ($heure_livraison = $heure_prochaine_livraison; $heure_livraison <= $heure_derniere_livraison; $heure_livraison += (15*60) ){
  $heure_lisible = date("H:i", ($heure_livraison + (60*60) ) ); // on compense le décalage horaire du serveur (GMT+1 pour nous)
  echo '<option value="' . $heure_livraison . '">' . $heure_lisible . '</option>';
}
?>
