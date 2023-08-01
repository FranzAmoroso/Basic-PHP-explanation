<?php

$persona = [
    "nome" => "franz",
    "cognome" => "amoroso",
    23 => 23,
];

foreach($persona as $chiave => $valore){
    echo $chiave . " => " . $valore. "<br>";
};
