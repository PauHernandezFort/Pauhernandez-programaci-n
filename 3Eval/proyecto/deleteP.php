<?php
 require_once "autoloader.php";
$patient=$_GET['id'];
$datos = new LogPatient('dataP.csv');
$datos ->delete($patient);

header("location: indexp.php");
?>