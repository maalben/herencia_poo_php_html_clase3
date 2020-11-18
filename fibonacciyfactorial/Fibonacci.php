<?php 

require_once 'Valor.php';

class Fibonacci extends Valor{

    public function calcularFibonacciPara(){
        $a = 0;
        $b = 1;

        for($i=1; $i <= $this->getValor(); $i++){
            echo $a . " ";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
    }

    public function calcularFibonacciMientras(){
        $cont = 0;
        $a = 0;
        $b = 1;

        while($cont < $this->getValor()){
            echo $a . " ";
            $c = $a + $b;
            $a = $b;
            $b = $c;
            $cont = $cont + 1;
        }
    }

    public function calcularFibonacciHacerMientras(){
        $cont = 0;
        $a = 0;
        $b = 1;

        do{
            echo $a . " ";
            $c = $a + $b;
            $a = $b;
            $b = $c;
            $cont = $cont + 1;
        }while($cont < $this->getValor());
    }
}
?>