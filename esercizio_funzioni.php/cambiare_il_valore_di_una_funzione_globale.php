<?php

$numero = 5;
echo $numero. "<br>";//a schermo mostrerà il valore iniziale, cioè 5.
function saluta(){
    $GLOBALS['numero'] = 10;//cambieremo dall'interno della funzione il valore della variabile
    echo $GLOBALS['numero']. "<br>";//mostreremo a schermo il nuovo valore della variabile, 10.
}
saluta();
echo $numero;//dopo la funzione chiamando la variabile mostreremo a schermo il nuovo valore della variabile, 10.
?>