<?php
    $nomeCartella = 'cartellaProva';
    if(!file_exists($nomeCartella)){
       if(mkdir($nomeCartella)){
        echo 'cartella creata';
       }else{echo 'errore in creazione cartella';}
    }else{echo 'cartella esiste già';}
?>