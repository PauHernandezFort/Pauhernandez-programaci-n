<?php
$numerosHechos = [];
$numerom = 49;
$numeromi = 1;
dame ($numerom, $numeromi);
function dame ($m, $n){
    $num = random_int($n, $m);
    return $num;
}

for ($i=0; $i < 6 ; ) { 
    $num = dame($numerom, $numeromi);
    if (!in_array($num, $numerosHechos)){
        $numerosHechos[$i] = $num;
            $i++;
    }

    
    
}
echo implode ("-", $numerosHechos);
?>