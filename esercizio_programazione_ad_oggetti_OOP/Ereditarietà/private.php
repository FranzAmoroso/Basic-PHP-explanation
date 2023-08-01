<?php



class Persona{
    public $name;
    public $cognome;

    function __construt($name, $cognome){
        $this->name = $name;
        $this->cognome = $cognome;
    }
    private function saluta(){
        echo "ciao sono $this->name,$this->cognome"."<br";
    }
}
class Programmatore extends Persona {
    public $lavoro;

    function __construct($name,$cognome,$lavoro){
        $this->name = $name;
        $this->cognome = $cognome;
        $this->lavoro = $lavoro;
    }
}

$programattore = new Programmatore('Franz','Amoroso','Programmatore');
$programmatore->saluta();
echo "non possaimo chiamare una classe privata"
?>