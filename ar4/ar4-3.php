<?php
$arr1 = [1,2,3,108,5,6,7,8,9,10];
$par = [];
$imp = [];
$num = count($arr1) -1;
    for ($i=0; $i <=$num ; $i++) { 
        if(($arr1[$i] % 2) == 0){
            $par[$i] = $arr1[$i];
        } 
        else{
        $imp[$i] = $arr1[$i];
        }
    }
    foreach ($par as $pares) {
        echo "$pares ,";
    } echo "<br>";
    foreach ($imp as $impares) {
        echo "$impares .";
    }
?>