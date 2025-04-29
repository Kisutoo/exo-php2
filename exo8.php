<?php
$url = "https://my.mobirise.com/data/userpic/764.jpg";
repeterImage($url,4);
repeterImage2($url,4);

function repeterImage($url,$i)
{
    while($i > 0)
    {
        echo "<img src=$url />";
        $i--;
    }
}

function repeterImage2($url,$i)
{
    for($k = 0; $i > $k; $i--)
        echo "<img src=$url />";
}
?>