<?php
//variabile Globale
$nome = $_POST['nome'];

function saluta(){
    $GLOBALS['nome'];
    echo $GLOBALS['nome'];
}
saluta()
?>