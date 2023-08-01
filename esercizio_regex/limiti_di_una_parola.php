<?php
//\b vuol dire limite di una parola.
$pattern = "/\bcar\w*/";
//deve essere una parola che cominci con car.
$replacement = "<b>$0<b>";
$text = "word beginin with car: carton, carrot, cart. words ending with car: scar, oscar,supercar";
echo preg_replace($pattern,$replacement,$text);
?>