<?php
//$nomsInput = ["Nom","Prénom","Ville"];
//afficherInput($nomsInput);

function afficherInput($nomsInput)
{
    foreach($nomsInput as $v)
    {
        echo "<label>".$v."</label><br>";
        echo "<input
            type=text
            id=
            name=
            required
            minlength=0
            maxlength=50
            size=10 /><br>";
    }
}
?>