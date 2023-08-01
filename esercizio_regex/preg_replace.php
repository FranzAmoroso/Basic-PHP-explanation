<?php

$nomeImmagine = "logo brand nero.png";
$patternSpazi = "/\s/";
$replacement = "_";
$ciao = preg_replace($patternSpazi, $replacement, $nomeImmagine);
echo $nomeImmagine. ' '.'è stato cambiato in'.' '.$ciao;
?>