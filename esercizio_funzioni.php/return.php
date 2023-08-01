<?php

$numero = 5;
$numero2 = 14;
$somma = somma($numero, $numero2);

function somma($valore1, $valore2){
    $somma = $valore1 + $valore2;
    return $somma;
    //return $somma serve a farci dare l'operazione di qualsiasi genere eseguita dalla funzione.
    //quindi solo con return prendiamo quel valore o variabile che gli abbiamo dato per mostrarlo all'esterno
}
echo $somma;