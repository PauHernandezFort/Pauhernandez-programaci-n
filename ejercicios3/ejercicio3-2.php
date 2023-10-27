<?php

$arr1 = [];
$arr2 = [];
$contador = 0;

while ($contador <5 ){
$arr1[$contador] = rand (1,9);
$arr2[$contador] = rand (1,9);
echo "el primer numeor es ", $arr1[$contador] * $arr2[$contador], "<br>";
$contador ++ ;

}
?>


