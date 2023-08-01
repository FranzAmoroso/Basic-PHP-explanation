<?php

class Persona{

    //Proprietà
    public $nome;
    public $cognome;
    protected $eta;
    private $telefono;


    //Costruttore
    function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    //Metodi
    function saluta(){
        echo "ciao sono $this->nome, $this->cognome"."<br>";
    }
}

$persona1 = new Persona("Franz","Amoroso");
$persona1->nome='nome';
$persona1->saluta();
var_dump($persona1);



?>