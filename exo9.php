<?php
$nomsRadio = array("Masculin", "Feminin", "Autre");
afficherRadio($nomsRadio);

function afficherRadio($nomsRadio)
{
    foreach ($nomsRadio as $v)
        echo "<input type=radio name=gender> ".$v."</input><br>";
}
?>
