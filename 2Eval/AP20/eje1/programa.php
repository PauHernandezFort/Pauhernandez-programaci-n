<?php
require_once "autoloader.php";
$agua= new Agua (1,2,3,4,5,6);
echo "agua","<br>";
$mostrar = $agua ->getAgua();
echo $mostrar;

$mostrar = $agua ->getEnvasado();
echo " -$mostrar";

$agua= new Aire (1,2,3,4,5,6);
echo "<br>","aire","<br>";
$mostrar = $agua ->getAire();
echo $mostrar;

$mostrar = $agua ->getEnvasado();
echo " -$mostrar";

$agua= new Fresco (1,2,3,4);
echo "<br>","Origen","<br>";
$mostrar = $agua ->getLote();
echo $mostrar;

$mostrar = $agua ->getOrigen();
echo " -$mostrar";

$agua= new Nitrogeno (1,2,3,4,5,6);
echo "<br>","Nitrogeno","<br>";
$mostrar = $agua ->getLote();
echo $mostrar;

$mostrar = $agua ->getInfo();
echo " -$mostrar";




?>