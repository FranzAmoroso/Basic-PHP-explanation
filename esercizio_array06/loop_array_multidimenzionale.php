<?php

$classi = [
    ['luca', 'anna', 'lucia'],
    ['francesca', 'ines', 'laura']
];

for($classe=0; $classe < count($classi); $classe++){
    echo 'Classe :'. " ". $classe. '<br>';

for($alunno=0; $alunno < count($classi[$classe]); $alunno++){
    echo $classi[$classe][$alunno]. '<br>';
    }
}