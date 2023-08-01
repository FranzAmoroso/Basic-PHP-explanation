<?php

$numero = 5;
$numero2 = 10;
$somma = somma($numero, $numero2);

function somma(int $valore1,int $valore2): string {
    $somma = $valore1 + $valore2;
    return "ciao";
}
echo $somma;
?>
