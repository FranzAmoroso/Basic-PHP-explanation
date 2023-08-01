<?php
    $nomeFile = 'note4.txt';
    $renameFile = $_POST['text'];
    if(file_exists($nomeFile)){
        rename($nomeFile, $renameFile);
       echo  str_replace($nomeFile, $renameFile, $nomeFile);
    }
?>