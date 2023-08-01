<?php

$numero = $_POST['number'];

function trovaPari($valore1, $valore2 = 2){
    $trovaPari = $valore1;
    if($trovaPari > 0 && $trovaPari % $valore2 == 0){
        echo "e pari";
    }else{
        echo "è dispari";
    };
}
trovaPari($numero);
?>
