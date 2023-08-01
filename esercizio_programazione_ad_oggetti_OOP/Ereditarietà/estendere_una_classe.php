<?php
class Persona{

    public $nome;
    public $cognome;

    public function __construct($nome,$cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }
    public function saluta(){
        echo "Ciao sono $this->nome, $this->cognome". '<br>';
    }

}

Class Insegnante extends Persona{
    public $materia;
    public function __construct($nome,$cognome,$materia){

    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->materia = $materia;
}
function saluta(){
    echo "Buongiorno sono $this->nome, $this->cognome insegno $this->materia".'<br>';
}
}
$insegnante2 = new Persona('Victoria','Amoroso');
$insegnante1 = new Insegnante('Azzurra','Amoroso','Matematica');
$insegnante1->saluta();
$insegnante2->saluta();


?>