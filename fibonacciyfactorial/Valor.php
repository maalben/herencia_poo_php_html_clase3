<?php 

class Valor{

    private $valor;

    public function __construct(){
        $this->valor = 0;
    }

    public function setValor($numero){
        $this->valor = $numero;
    }

    public function getValor(){
        return $this->valor;
    }
}
?>