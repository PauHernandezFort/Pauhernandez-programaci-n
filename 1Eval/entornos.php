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
return $array;
}
function pruebaUnpudosnum ($a,$b){
    return $a < $b;
}

function comarray($array){
    $bien = 0;
    $contador=0;
    while($contador< count($array)-1){

    $bien =pruebaUnpudosnum($array[$contador],$array[$contador+1]);
    if($bien == False){
        exit;
    }else{
        echo"bien";
    }
    $contador++
    }
}
    //programa
    $arr =[1,6,4,56,13];
    $arrOrdenado= ordenar($arr);
    echo "<br>";
    var_dump($arrOrdenado);
?>
