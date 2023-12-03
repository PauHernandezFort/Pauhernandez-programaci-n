<?php

$arr = [1,2,3,4,5,5,7,8];
$iguales = 0;
$contador = 0;
$num = count($arr) -1;

for ($i=0; $i < $num ; $i++) { 
    for ($j=1; $j < $num ; $j++) { 
        
        if ($arr[$i] == $arr[$j]){
            $iguales ++;
        }
    }
}
    
    echo "hay estos numeros repetidos:", $iguales -7;
?>