<?php

$numeroPersone = 5;
$numeroClassi = 10;

function somma($valore1, $valore2){
    $somma = $valore1 * $valore2;
    echo $somma;
    //con i parametri possiamo prendere delle variabili all'esterno della funzione e utilizzarli anche all'interno della funzione.
}
somma($numeroPersone , $numeroClassi);