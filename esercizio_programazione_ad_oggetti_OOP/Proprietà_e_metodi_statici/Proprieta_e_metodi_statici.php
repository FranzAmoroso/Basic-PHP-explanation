<?php
class Persona{
    static $conteggio = 0;
    public $nome;
    public $cognome;

    function __construct($nome,$cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
        //$this->conteggio = 1;
        Persona::$conteggio++;
    }
    static function prova(){
        // echo Persona::$conteggio. '<br>';
    }
}

echo Persona::$conteggio. "<br>";
$persona1 = new Persona('Amoroso','Gabriel');
echo Persona::$conteggio. '<br>';
$persona2 = new Persona('Franz','Amoroso');
echo Persona::$conteggio. '<br>';

?>