<?php
$precio = $_POST['1'];
$lunes = $_POST['2'];
$Martes = $_POST['3'];
$Miercoles = $_POST['4'];
$Jueves = $_POST['5'];
$Viernes = $_POST['6'];
$Sabado = $_POST['7'];

$horas = ($lunes + $Martes + $Miercoles + $Jueves + $Viernes + $Sabado);
$salario = ($precio + $horas);
echo "el empledado a trabajado $horas horas, y a cobrado $salario €";


?>