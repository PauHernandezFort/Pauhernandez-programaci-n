<?php
$arr = [1,10];
calculaSuma($arr);

function calculaSuma($numeros){
    $num1 = $numeros[0];
    $num2 = $numeros[1];
    $suma = 0;


    if(($num1 %2 )!== 0){
        $num1 ++;
    }
    while($num1 <= $num2){
        $suma += $num1;
        $num1 +=2;
         
        
    }
    return $suma;
}
echo calculaSuma($arr);

?>