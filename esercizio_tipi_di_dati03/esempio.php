<!DOCTYPE html>
<style>
    .p{
        background-color: #dedede80;
        border: 1px solid beige;
        padding: 5px;
        width: 200px;
        border-radius: 50px;
        cursor: pointer;


}
.p:hover{
background-color: #dedede99;
}
</style>
<?php

$nome = 'luca';
$cognome = 'millemaci';
$eta = 23;
$temperatura = 36.05;
$is_online = true;
$interessi = ['calcio','cinema','basket'];
$fidanzata= null;
class persona
{
    public $nome;
    public $cognome;
    public function __construct($nome, $cognome)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }
    public function saluta(){
        echo '<p class="p">ciao da '. $this->nome . ' '. $this->cognome.'</p>';
        
    }

}

$persona1 = new persona($_POST['nome'], $_POST['cognome']);?>

<p class="p"><?php var_dump($persona1);?></p>
<?php echo '<br>'; 
$persona1->saluta();
echo '<br>'; 
var_dump($nome);
//va_dump si usa per mostrare nella pagina web i dettagli della variabile scelta. se è una stringa un intero un float  un boolean un array o un null o un oggetto ecc..
$nome = 4345;
var_dump($nome);
?>