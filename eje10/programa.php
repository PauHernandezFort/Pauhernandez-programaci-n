<?php

require_once "autoloader.php";

$barAlcasserI = new Bar(10,10,5,"12€",7);
echo $barAlcasserI->servicioCliente();
$barRamon = new Restaurante(10,5,3,"25€",1);
echo "<br>";
echo $barRamon->servicioCliente();
$burgerRey = new Burguer(15,0,6,"7€",null);
echo "<br>";
echo $burgerRey->servicioCliente();


?>