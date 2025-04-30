<?php
$tableauValeurs = [true, "texte",10,25.369, ["valeur1", "valeur2"]];
printtab($tableauValeurs);

function printtab($tab)
{
    $i = 0;
    $j = count($tab); 
    while ($i < $j)
    {
        var_dump($tab[$i]);
        echo "<br>";
        $i++;
    }
}
?>