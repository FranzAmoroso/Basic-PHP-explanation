<?php
$richiesta = $_POST['data'];
$selezionato = $_POST['selezione'];
$strJsonFileContens = array("$selezionato,$richiesta");


$strJsonFileContens = file_get_contents("pokedex.JSON");
$array = json_decode($strJsonFileContens, true);

/* $strJsonFileContens = file_get_contents("colori.JSON");
$array = json_decode("colori.JSON", true); */

echo '<pre>' . var_export($array['pokemon'][$selezionato][$richiesta], true). '</pre>';

/* echo json_encode($array); */
?>