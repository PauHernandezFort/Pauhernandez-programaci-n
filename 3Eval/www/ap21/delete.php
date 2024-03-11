<?php
 require_once "autoloader.php";
$id =$_GET['id'];

$prueba = new Conection();
$conn = $prueba->getConn();
$query = "DELETE FROM empresa WHERE id = '$id'";
$result = mysqli_query($conn, $query);
header("location: index.php");
?>