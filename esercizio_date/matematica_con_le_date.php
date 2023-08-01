<?php

/* 
operatori usabili: + - 
applicabile:
days
years
month
hour
minute
second
*/

//la data di oggi 'now' più sette giorni ' 7 days'
$data = date('d-m-Y', strtotime('now'.'+ 7 days'));
echo $data;
?>