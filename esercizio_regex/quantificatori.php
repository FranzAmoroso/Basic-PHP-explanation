<?php 
//p+ trova una o più occorenze della lettera p
//p* trova zero o più occorenze della lettera p
//p? trova zero o una occorenza della lettera p
//p[2] trova esattamente 2 occorenze della lettera p
//p[2,3] trova almeno 2 occorenze della lettera p o al massimo tre occorenze della lettera p
//p[2, ] trova minimo 2 o più occorenze
//p[ ,3] trova al massimo 3 occorenze

$text = "My favorite colors are red, blu and green.";
$pattern = "/[\s,]+/";
$parts = preg_split($pattern,$text);
foreach ($parts as $part){
echo $part. '<br>';
}
?>