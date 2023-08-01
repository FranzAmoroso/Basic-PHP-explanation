<?php

$mumero = 5;
$persone = 6;

function saluta(){
    echo $GLOBALS['persone'];//modo di richiamare una variabile esterna aal'interno di una funzione
}

saluta();
?>

