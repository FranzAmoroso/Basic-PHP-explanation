<?php
//per ottenere il timestamp da una data numerica
//primo metodo per trovare il timestamp
$data = mktime(
    $hour = 20,
    $minute = 11,
    $second = 30,
    $month = 05,
    $day = 8,
    $year = 2023
);
//secondo metodo per trovare il timestamp
$data2 = mktime(21, 11, 30,05,7,2022);
echo $data2." " .$data;
?>