<?php
$productos = [10,55,43.99,12.50];
$descuentos = [0,10,5,15];

function precios( $arr1,$arr2){
    $precioF = [];
    for ($i=0; $i < count($arr1) ; $i++) { 
        $prod = $arr1[$i];
        $desc = $arr2[$i];
        $precioS = ($desc * $prod /100) - $prod;
        $precioC = (21 * $precioS /100) - $precioS;
        $precioF[$i] = $precioC;
    }
    return $precioF;
}
    for ($i=0; $i < 4 ; $i++) {
        $final = precios($productos,$descuentos)[$i];
        echo "El precio numero ", $i +1 , " es $final", "<br>";
        
    }
?>