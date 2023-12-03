<?php
$arr1 = [1,2,3,4,5,6,7,8,9,10];
$arr2 = [
    'pares' => [],
     'impares' => [],
    ];

$num = count($arr1) -1;
    for ($i=0; $i <=$num ; $i++) { 
        if(($arr1[$i] % 2) == 0){
             $arr2['pares'][$i] = $arr1[$i];
        } 
        else{
        $arr2['impares'] [$i] = $arr1[$i];
        }
    }
        echo implode ("-", $arr2['pares']);
        echo "<br>";
        echo implode ("-", $arr2['impares']);
   
   
?>