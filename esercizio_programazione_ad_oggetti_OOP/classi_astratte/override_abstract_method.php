<?php
//Classe Astratta
abstract class Persona{
    public $nome;
    public $cognome;

    public function __construct($nome,$cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }
    abstract function saluta($nome,$cogonme);
}
//Classe Figle
class Insegnante extends Persona{
    public $materia;

    public function __construct($nome,$cognome,$materia){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->materia = $materia;
    }
    function saluta($nome,$cognome,$materia="Storia"){
        echo "sono $nome $cognome insegno $materia";
    }
}
$insegnante1 = new Insegnante('Franz','Amoroso','Matematica');
$insegnante1->saluta($insegnante1->nome,$insegnante1->cognome,$insegnante1->materia);
?>