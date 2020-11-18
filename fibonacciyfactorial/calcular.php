<?php 

if(isset($_POST["btncalcular"])){

    require_once 'Fibonacci.php';
    require_once 'Factorial.php';

    $fibonacci = new Fibonacci();
    $factorial = new Factorial();

    $numero = $_POST["txtnumero"];

    $fibonacci->setValor($numero);
    $factorial->setValor($numero);

    $fibonacci->calcularFibonacciPara();
    echo "<br><br>";
    $fibonacci->calcularFibonacciMientras();
    echo "<br><br>";
    $fibonacci->calcularFibonacciHacerMientras();
    echo "<br><br><br>";
    echo "La factorial de " . $numero . " es " . $factorial->calcular();

}else{
    echo "Acceso no autorizado.";
}

?>