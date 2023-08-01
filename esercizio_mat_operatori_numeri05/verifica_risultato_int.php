<?php

$operatore1 = 3;
$operatore2 = 3.5;
$operatore3 ='10';

$risultato = $operatore1 + $operatore3;

var_dump(is_int($risultato));
echo 'Il Risultato è ' , $risultato, ' (INTERO)';
?>