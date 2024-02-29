<?php
 require_once "autoloader.php";
$patient=$_GET['id'];
$datos = new Log('data.csv');
$datos ->delete($patient);

header("location: index.php");
?>