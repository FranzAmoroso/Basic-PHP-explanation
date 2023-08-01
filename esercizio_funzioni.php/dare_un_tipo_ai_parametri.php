<?php

$numero= 5;

function somma(int $valore1, string $valore2){
    $somma = $valore1 + $valore2;
    echo $somma;
}
somma($numero, "10");