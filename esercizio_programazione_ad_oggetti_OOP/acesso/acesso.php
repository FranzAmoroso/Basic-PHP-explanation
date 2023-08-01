<?php


class User{

    public $nome;
    public $cognome;

    public function __construct($nome,$cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function saluta(){
        echo "Benvenuto"." ". $this->nome. ' '. $this->cognome;
    }
}

$user = new User($_POST['nome'],$_POST['cognome']);
setcookie('user',$_POST['nome'].' '. $_POST['cognome'], time()+30*30);

$user->saluta();


?>