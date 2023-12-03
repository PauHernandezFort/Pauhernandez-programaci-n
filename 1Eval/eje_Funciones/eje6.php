<?php
$let = "a";
$n = 80;
caracter($let, $n);
function caracter($letra, $num){
    $contador = 0;
    $suma = 1;
    while ($contador < $num){
    
        for ($i=0; $i < $suma; $i++) { 
            echo $letra;
        }

        $contador ++;
        $suma +=2;
        echo "<br>";
    } $contador =0; $suma -=4;
    while ($contador < $num){
    
        for ($i=0; $i < $suma; $i++) { 
            echo $letra;
        }

        $contador ++;
        $suma +=-2;
        echo "<br>";
    }

}
?>