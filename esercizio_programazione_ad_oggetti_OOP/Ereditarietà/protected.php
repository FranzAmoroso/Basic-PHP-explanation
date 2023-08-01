<?php
class Persona{

    public $nome;
    public $cognome;

    public function __construct($nome,$cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;    
    }
    protected function saluta(){
        echo "Ciao sono $this->nome,$this->cognome."."<br>";
    }
}

class Insegnante extends Persona{

    public $materia;

    function __construt($nome,$cognome,$materia){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->materia = $materia;
    }

    function prova(){
        $this->saluta();
    }
}

$Insegnante = new Insegnante('Victoria','Amoroso','Matematica');
$Insegnante->prova();