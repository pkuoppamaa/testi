<?php

function merkkijononNumerointi($x)
{
    $x = $x."1";
    //$x .= "1";
    return $x;
}

function numeronJakaminenKahdella($x)
{
    $x = $x / 2;
    return $x;
}

function kahdenLuvunKertominen($x, $y)
{
    $tulo = $x * $y;
    return $tulo;
}

$nimi = "Matti";
$numero = 7;

//echo $nimi."<br>";
//echo $numero."<br>";

$nimi = merkkijononNumerointi($nimi);
$numero = numeronJakaminenKahdella($numero);

echo $nimi."<br>";
echo $numero."<br>";

//echo round($numero)."<br>";
//echo rand()."<br>";
//echo kahdenLuvunKertominen(2,3)."<br>";

?>
