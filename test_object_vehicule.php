<?php
// Fichier d'éxécution //
include './vehicule.php';
$voiture= new Vehicule("Mercedes CLK",4,250);
$moto= new Vehicule("Honda CBR",2,280);
echo "<p> Le véchicule : "  .$voiture->nomVehicule." est type :" .$voiture ->detect()."</p>";
echo "<p> Le véchicule : "  .$moto->nomVehicule." est type :" .$moto ->detect()."</p>";
$voiture->boost();
// Correction //
    // echo "<p>La nouvelle vitesse du véhicule : ".$voiture->nom." est  de : ".$voiture->vitesse."</p>";
    // echo "<p>Le véhicule le plus rapide est : ".$moto->plusRapide($voiture)."</p>";

