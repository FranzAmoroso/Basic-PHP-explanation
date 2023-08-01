<?php
class Persona{

    //proprietà
    public $nome;
    public $cognome;
    protected $età;
    private $telefono;

    //metodi
    function saluta(){
        echo "ciao sono $this->nome $this->cognome";
    }
}

$persona1 = new Persona();
$persona1-> nome = 'Franz';
$persona1-> cognome ='Amoroso';
var_dump($persona1);


?>