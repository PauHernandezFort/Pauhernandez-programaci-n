<?php
 require_once "autoloader.php";
$id = 1;
$comapny =  "kiko";
$investment = 10;
$data = 10;
$active = 10;


$objetoNuevo = new Empresa($id,$comapny,$investment,$data,$active);
$datos = new cartera('data.csv');
$datos ->edit($objetoNuevo);
header("location: index.php");

?>