<?php
$operatore1 = 3;
$operatore2 = 3.5;
$operatore3 = '10';


$risultato = $operatore2 + $operatore3;
var_dump(is_float($risultato));
echo 'Il Risultato è ', $risultato, ' (FLOAT)'
?>