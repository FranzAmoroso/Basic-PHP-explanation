<?php
$nomeFile = 'note.txt';
if(file_exists($nomeFile)){
    $file = fopen($nomeFile, 'r');
    $content = fread($file, '20');
    echo $content;
    fclose($file);
}else{echo 'file not exists';}

    
?>