<?php
 require_once "autoloader.php";
$id =$_GET['id'];
$datos = new cartera('data.csv');
$datos ->delete($id);

header("location: index.php");
?>