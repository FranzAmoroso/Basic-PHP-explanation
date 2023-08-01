<?php
$numero = $_POST['number'];
if($numero >= 18 && $numero <= 67 && $numero >= 18 && $numero <= 67)
    {echo "l'età ".$numero. " rientra nel periodo lavorativo";}
    else{echo "l'età ". $numero. " non rientra nel periodo lavorativo";}