<?php
    $nomeFile = 'note2.txt';
    if(file_exists($nomeFile)){
        $file = fopen($nomeFile, 'r');
        $content = fread($file, filesize($nomeFile));
        echo $content;
        fclose($file);
    }else{echo 'file not exists';}
?>