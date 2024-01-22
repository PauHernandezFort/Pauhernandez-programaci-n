<?php
function ordenar($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
           
        }
        echo "pasada ",$i +1 , ": ", implode(", ", $arr),"<br>";
    }    
    return $arr;
}
function pruebaUnitaria($arr){
    echo "<br>","PRUEBA UNITARIA","<br>";
    for ($i=0; $i < count($arr)-1; $i++) { 
        if ($arr[$i] > $arr[$i+1]) {
            echo "<br> Todo bien";
        } else {
            echo "Error";
        }
    }
}

// Ejemplo de uso
$originalArray = [64, 34, 25, 12, 22, 11, 901];

echo "Array original: " . implode(", ", $originalArray) . "\n";
echo "<br>";
$sortedArray = ordenar($originalArray);
echo "Array ordenado: " . implode(", ", $sortedArray) . "\n";
$prueba =pruebaUnitaria($sortedArray);
echo "<br>";
echo $prueba;
?>