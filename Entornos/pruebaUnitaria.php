<?php

function ordenar($arr) {
$n = count ($arr);
for ($i = 0; $i < $n - 1; $i++) {
for ($j = 0; $j <$n - $i - 1; $j++) {
if ($arr[$j] < $arr[$j + 1]) {
$temp = $arr[$j];
$arr[$j] = $arr[$j + 1];
$arr [$j + 1] = $temp;
}
}
}
pruebaUnitaria($arr);
}
function pruebaUnitaria ($arr){
    $contador =0;
    for ($i=0; $i < count ($arr) -1; $i++) {
    if ($arr[$i] > $arr[$i+1]) {
    echo
    "<br> Todo bien";
        $contador ++;
    }
     else {
    echo "Error el numero",$arr[$i],"en la posicion numero",$i, "no es mayor que el numero",$arr[$i+1],"en la posicion",$i+1 ;
    }
    }
        if($contador == count($arr)){
            echo "el array esta bien";
            return $arr;
        }
        else{
            echo"El array esta mal, no eta ordenado";
        }
    }
?>