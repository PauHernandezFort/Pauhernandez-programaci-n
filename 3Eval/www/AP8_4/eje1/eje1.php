<?php
 require_once "autoloader.php";
$prueba = new Modelo;

$con = $prueba->getConn();
$prueba->addTarea();


?>