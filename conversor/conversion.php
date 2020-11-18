<?php 

if(isset($_POST["btncalcular"])){

    require_once 'Moneda.php';

    $moneda = new Moneda();

    $valor = $_POST["txtvalor"];

    $moneda->setValor($valor);

    echo "La conversión de ". $valor . " es " . number_format($moneda->convertir(), 2, ',', ' ');

}else{
    echo "No has ingresado de manera correcta..";
}


?>