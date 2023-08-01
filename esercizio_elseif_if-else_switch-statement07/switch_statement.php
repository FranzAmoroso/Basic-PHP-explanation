<?php
$numeroPreferito = $_POST['number'];
$CP = $_POST['text'];
$colorePreferito = $_POST['color'];


switch ($numeroPreferito){
    case $numeroPreferito: 
        echo "il tuo numero preferito è". " ". $numeroPreferito. "<br>";
        /* break; */
    case $coloreprefer:
        echo "il tuo colore preferito è il ". " ". $CP. "<br>";
        /* break; */
    case $colorePreferito:
        echo "il tuo colore preferito è il". " ". $colorePreferito;
        break;//quando il codice trova la soluzioni si interrompe
    default;
    echo "non hai un numero preferito vergognati";
    break;
}