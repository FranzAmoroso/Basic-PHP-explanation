<?php
$numero = $_POST['number'];

if($numero >= 18 || $numero <= 60 && $numero >= 18){
    echo 'è idoneo';
}else{echo 'non è idoneo';}