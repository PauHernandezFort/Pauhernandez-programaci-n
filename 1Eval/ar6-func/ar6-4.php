<?php
$productos =  [10,55,43.99,12.50];
$descuentos = [0,10,5,15];

precios($productos,$descuentos);

function precios($prod, $descu){
 
    $preciot = [];
    for ($i=0; $i < 4; $i++) { 
        $precio = 0;
        if($descu[$i] !==0){
       $precio = (($descu[$i] * $prod[$i]) /100)  - $prod[$i];
       } else{
        $precio = $prod[$i];
       }
       $precio *= 1.21;
       $preciot[$i] = $precio;
      
    }
    return $preciot;
}
foreach(precios($productos,$descuentos)as $precios){
    if($precios < 0){
        $precios *= -1;
    }
    echo $precios, "<br>";
}




?>