<?php
$date = "2018-02-23";

$datefinal = new DateTime($date);
echo formaterDateFr($datefinal);

function formaterDateFr($datefinal)
{
    $formater = new IntlDateFormatter(
        'fr_FR',
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE,
        'Europe/Paris',
        IntlDateFormatter::GREGORIAN
    );
    $dateFrancais = $formater->format($datefinal);
    return $dateFrancais;
}
?>

