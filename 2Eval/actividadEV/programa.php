<?php
require_once "autoloader.php";

$cuenta1= new Corriente ("Jose",100);
echo $cuenta1->getTitular();
echo "<br>";
$cuenta1 ->ingresar(100);
$cuenta1 ->retirar(50);
echo $cuenta1->getCantidad();
echo "<br>";


$cuenta2 = new Ahorro ("ratpenat",100,1);
echo $cuenta2->getTitular();
echo "<br>";
$cuenta2-> ingresarAhorro(100);
echo $cuenta2->getCantidad();
echo "<br>";
$cuenta2 ->retirar(50);
 $cuenta2->setInteres(12);
 $cuenta2-> ingresarAhorro(100);
 echo $cuenta2->getCantidad();
 echo "<br>";

 $cuenta3 = new Inversion ("Patata",100,1);
echo $cuenta3->getTitular();
echo "<br>";
$cuenta3-> ingresar(100);
echo $cuenta3->getCantidad();
echo "<br>";
 $cuenta3->setInversion(100);
 $cuenta3-> ingresar(100);
 echo $cuenta3->getCantidad();
 $cuenta3->retirarInversion(50);
 echo "<br>";
 echo $cuenta3->getCantidad();

?>