<?php
//variabile
$nome = $_POST['nome'];
echo $nome;
//variabile Locale (dentro una funzione)
function saluta(){
    $nome = 'orazio';
    echo $nome;
}
saluta();

?>