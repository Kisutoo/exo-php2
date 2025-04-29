<?php
$texte = "Bonjour";

function convertirMajRouge($texte)
{
    return "<p style=\"color: red;\">" . strtoupper($texte) . "</p>";
}

echo convertirMajRouge($texte);
?>
