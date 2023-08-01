<?php
//name è il name del cookie
//value è il valore del cokie
//expires è il time stemp,quando sarà la scadenza del cookie.
//domain in quale dominio il cookie sarà disponibile
//path dove il cookie sarà disponibile, sè metteremo / il cookie sarà disponibile in tutto il dominio
//secure se andiamo ad indicare che il cookie è secure, potrà essere utilizzato exlusivamente con HTTPS connection.

$userName = $_POST['name']." ". $_POST['cognome'];

setcookie("user", $userName, time()+60*60*24*30);



?>