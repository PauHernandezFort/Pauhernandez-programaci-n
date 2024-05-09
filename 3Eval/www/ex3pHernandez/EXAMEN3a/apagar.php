<?php
 require_once "autoloader.php";
$id= $_GET['id'];
$estado=$_GET['status'];
 $objeto = new Lighting('lighting.csv');
 $objeto->apagar($id,$estado);
 header("location: index.php");

?>
