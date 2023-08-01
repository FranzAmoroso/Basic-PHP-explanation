<?php
    
    /* $files = glob("extra\sottoextra\*.txt"); */
    /* $files = glob("extra\*.txt"); */
    $files = glob("*");
    foreach($files as $file){
        echo basename($file). " (size ". filesize($file). " byte) ". "<br>";
    }
?>