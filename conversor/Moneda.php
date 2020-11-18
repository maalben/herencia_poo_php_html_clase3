<?php 

class Moneda{

    private $valor;

    public function __construct(){
        $this->valor = 0;
    }

    public function setValor($cantidad){
        $this->valor = $cantidad;
    }

    public function getValor(){
        return $this->valor;
    }

    public function convertir(){
        return ($this->getValor() *  0.00027);
    }
}
?>