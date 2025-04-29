<?php
//$elements = ["Monsieur","Madame","Mademoiselle"];
//alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements)
{   
    echo "<select name=gender id=gender-select>";
    foreach ($elements as $v) 
        echo "<option>".$v."</option><br>";
        echo "</select>";
        
}
?>