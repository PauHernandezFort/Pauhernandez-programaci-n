<?php
 require_once "autoloader.php";
$prueba = new Conexion;

$con = $prueba->getConn();
$query= "INSERT INTO `nombre`(`id`, `name`, `investment`, `amount`) VALUES ('1','12313','23211','12')";
$result = mysqli_query($con,$query);



?>