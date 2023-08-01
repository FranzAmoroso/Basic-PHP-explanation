<?php

abstract class Persona{
    public $nome;
    public $cognome;
    abstract function saluta($nome,$cognome);
}
class Insegnante extends Persona{
    public $materia;

    public function __construct($nome,$cognome,$materia){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->materia = $materia;
    }
    function saluta($nome,$cognome,$materia="matematica"){
        echo "buongiorno sono $this->nome $this->cognome insegno $this->materia";
    }
    public function cade_a_terra(){
        echo "toonf!";
    }
}

interface entita{
    public function cade_a_terra();
}

$insegnante1 = new Insegnante("Franz","amoroso","matematica");
/* $insegnante1->saluta($insegnante1->nome,$insegnante->cognome,$insegnante->materia);
var_dump($insegnante1); */


?>