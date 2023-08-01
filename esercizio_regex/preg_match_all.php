<?php

$testo = "Oggi è una bella giornata, quando esco fuoi c'è caldo";

$pattern = "/è/";
$matches = (preg_match_all($pattern, $testo,$array));
if($matches > 0){
        echo $matches. ' '. "Matches sono stati trovatii";}
        else{
            echo 'non sono stati trovati';
        }

