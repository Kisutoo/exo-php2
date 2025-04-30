<?php

include 'exo5.php';
include 'exo6.php';

$form = ["Nom","Prénom","Adresse e-mail","Ville","Sexe"];
$formation = ["Designer web","Intégrateur","Chef de projet"];

afficherInput($form);
echo "<br>";
alimenterListeDeroulante($formation);
echo "<br><br><button>Submit</button>";
?>
