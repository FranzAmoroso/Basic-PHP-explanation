<?php
$nomeFile = 'note3.txt';
$text = $_POST['text'];
if(file_exists($nomeFile)){
    file_put_contents($nomeFile, $text);
    $file = fopen($nomeFile, 'r');
    $content = fread($file, filesize($nomeFile));
    echo $content;
}
?>