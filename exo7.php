<?php
$elements = array(
    "Choix 1" => "",
    "Choix 2" => "checked",
    "Choix 3" => ""
);
genererCheckbox($elements);

function genererCheckbox($elements)
{
    foreach ($elements as $k => $v)
        echo "<input type=checkbox $v> ".$k."</input><br>";
}
?>