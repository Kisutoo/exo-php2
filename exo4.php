<?php
$capitales = array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
);
ksort($capitales);
afficherTableHTML($capitales);

function afficherTableHTML($array)
{
    $l = "https://fr.wikipedia.org/wiki/";

    echo "<table border=1><th>Pays </th><th>Capitale </th><th>Lien Wiki </th>";
    foreach($array as $k => $v)
        echo "<tr><td>". strtoupper($k)."</td><td>". $v."</td><td><a href=".$l,strtolower($v)." target=_blank>Lien</a></td></tr>";
    echo "</table>";
}
?>
