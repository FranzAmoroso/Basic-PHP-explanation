<?php

$testo1 = "Oggi è una splendida giornata";
$testo2 = "Oggi non è una bella giornata";
$pattern1 = "/Og[gk]i/";{
    if(preg_match($pattern1,$testo1)){
        echo "match con [abc]";
    }else{echo "match non trovato";}
}

$pattern2 = "/Og[^gK]i/";{
    if(preg_match($pattern2,$testo2)){
        echo"<br>". "match 2 non trovato!";
    }else{echo "<br>". "match con [^abc]";}
}

