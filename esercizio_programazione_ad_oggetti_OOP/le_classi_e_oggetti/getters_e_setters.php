<?php

class Persona{
//Proprietà
    public $nome;
    public $cognome;
    protected $eta;
    private $telefono;


//Costruttore
    function __construct($nome,$cognome)
{
    $this->nome = $nome;
    $this->cognome = $cognome;
}   

//Getters e Setters
    function set_nome($nome){
        $this->nome = $nome;
    }
    function get_nome(){
        return $this->nome;
    }
    function set_cognome($cognome){
        $this->cognome = $cognome;
    }
    function get_cognome(){
        return $this->cognome;
    }
    function set_eta($eta){
        $this->eta = $eta;
    }
    function get_eta(){
        return $this->eta;
    }
    function set_telefono($telefono){
        $this->telefono = $telefono;
    }
    function get_telefono(){
        return $this->telefono;
    }

}

$persona1 = new Persona("Franz","Amoroso");
$persona1->set_eta(23);
/* var_dump($persona1); */

echo $persona1->get_nome();

?>