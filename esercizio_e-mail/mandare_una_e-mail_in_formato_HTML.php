<?php
$to = 'franz.amoroso@outlook.de';
$subject = 'Prova E-mail';
$from = "info.@amatores.com";

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";   
$headers .= 'To: '.$to;
$headers .= 'From: '.$from;


$message = "<html><body>";
$message .= "<h1 style='color:blue;'>Titolo della E-mail HTML</h1>";
$message .= "</body></html>";

if(mail($to,$subject,$message, $headers)){
    echo "la tua E-mail è stata inviata";
}else{
    echo "la tua E-mail non è stata inviata";
}
?>