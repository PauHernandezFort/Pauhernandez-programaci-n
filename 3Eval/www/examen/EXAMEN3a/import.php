<?php
 require_once "autoloader.php";
$importar= new Lighting('lighting.csv');
$importar ->getAllTask();
?>