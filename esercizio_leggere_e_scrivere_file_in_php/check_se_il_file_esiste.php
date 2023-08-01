<?php

$search = $_POST['search'];


if(file_exists($search)){
    $ref = fopen($search, "r");
    $content = fread($ref, filesize($search));
    echo $content;
    fclose($ref);
}else{echo 'file not exists';}
?>