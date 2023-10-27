<?php
$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
$dias = [31,28,31,30,31,30,31,31,30,31,30,31];

$contador = 0;
while ($contador <= 10) {
    $aleatorio = random_int(0,11);
    $diar = random_int (1,$dias[$aleatorio]);
echo "Hoy es ",$meses[$aleatorio] , $diar," de 2019","<br>";
$contador ++;
}

?>