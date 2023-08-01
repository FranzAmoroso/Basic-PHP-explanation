<?php
class Fruit{

    public $name;
    public $color;
    public $weight;

    function set_name($n){
        $this->name = $n;
    }
    protected function set_color($n){
        $this->color = $n;
    }
    private function set_weight($n){
        $this->weight = $n;
    }
    function prova($n){
        $this->set_color($n);
    }
}
$mango = new Fruit();
$mango->set_name('Mango');
$mango->prova('yellow');
var_dump($mango);
?>