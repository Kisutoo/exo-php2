<?php
$adresse = "elan@formation";
adresscheck($adresse);

function adresscheck($adresse)
{
    if (filter_var($adresse, FILTER_VALIDATE_EMAIL))
        echo "L'adresse $adresse est une adresse e-mail valide";
    else   
        echo "L'adresse e-mail est invalide";
}
?>