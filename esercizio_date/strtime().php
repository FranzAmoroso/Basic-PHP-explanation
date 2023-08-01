<?php

//per ottenere il timestamp da una data stringa
$data = strtotime('08/05/2023 14:50:00');

//ottenere il timestamp della data aggiornata
$dataAggiornata = strtotime('now');

//ottenere il timestamp della data di ieri
$dataIeri = strtotime('yesterday');

//ottenere il timestamp di domani
$dataDomani = strtotime('tomorrow');

echo $data. "<br>" .$dataAggiornata. "<br>" .$dataIeri. "<br>" .$dataDomani;
?>