<?php
    $nomeFile = 'note3.txt';
    $text = $_POST['text'];

if(file_exists($nomeFile)){
    $file = fopen($nomeFile, 'w');
    fwrite($file,$text);
}

/* $text = $_POST['text'];

    if(file_exists($nomeFile)){
        $file = fopen($nomeFile, 'w'); 
        fwrite($file, $text);
        $content = fread($file, 10);
        echo $content;
        fclose($file);
    }else{echo 'file not exists';}
?> */