<?php
/* 
d - numero del giorno
D - nome del giorno abbreviato
l - nome completo>
m - numero del mese
M - nome del mese abbreviato
y - anno con 2 cifre finali
Y - anno con 4 cifre finali
per separarli possiamo usare:  - . / 

il Tempo 
h - ore in formato 12
H - ore in formato 24
i - minuti
s - secondi
a - am e pm in minuscolo
A - AM e PM in maiuscolo 
*/
$data1 = date('d/m/Y', 1683566178);
$data2 = date('s:i:h a', 1683566178);


echo $data1. '<br>'. $data2;
?>