<?php

$numero1 = 1;
$numero2 = 0;
$fin = $_POST['1'];

while ($numero1 <= $fin) {
    $numero3 = ($numero1 + $numero2);
    $numero2 = $numero1;
    $numero1 = $numero3;
    echo $numero3;
    echo "<br>";

}


?>