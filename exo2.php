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
    echo "<table border=1><th>Pays </th><th>Capitale </th>";
    foreach($array as $k => $v)
        echo "<tr><td>". strtoupper($k)."</td><td>". $v."</td></tr>";
    echo "</table>";
}
