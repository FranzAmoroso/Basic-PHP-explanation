<?php 

function saluta() {
    define('COSA', 'Cassa Forte'); //costante globale , può essere chiamata al di fuori di una funzione quando si ci trova dentro
};
saluta();
echo COSA;
