<?php

$to = 'franz.amoroso@outlook.de';
$subject = 'E-mail di prova';
$messaggio = 'Salve egregi signori';
$from = 'info@amatores.com';

if(mail($to,$subject,$messaggio)){
    echo "l'E-mail è stata mandata";
}else{
    echo "l'E-mail non è stata mandata";
}
?>
