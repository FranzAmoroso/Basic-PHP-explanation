<?php
    $nomeCartella = 'cartellaProva';
    $nomeFile = 'fileCopiato.txt';
    $nuovoFile = $nomeCartella. '/' .$nomeFile;

    if(file_exists($nomeCartella)){
        if(copy($nomeFile,$nuovoFile)){
            echo 'cartella copiata con successo';
        }else{
            echo 'errore nel copiamento del File';
        }
    }else{echo 'File not exists';}
?>