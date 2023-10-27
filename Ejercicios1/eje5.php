<?php

function say()
{
    $autobus = 1;
    $personas = 10;
    $km = 10;

    if ($personas < 20){
        $personas2 = 20;
    } else{
        $personas2 = $personas;
    }
if ($autobus == 1){
    $preciot = (($personas2 *2)*$km);
    $preciop = ($preciot /$personas);
    
    echo "EL precio total del viaje es de $preciot y cada persona paga $preciop";
} elseif ($autobus == 2){
    $preciot = (($personas2 *2.5)*$km);
    $preciop = ($preciot /$personas);
    
    echo "EL precio total del viaje es de $preciot y cada persona paga $preciop";
} elseif ($autobus == 3){
    $preciot = (($personas2 *3)*$km);
    $preciop = ($preciot /$personas);
    
    echo "EL precio total del viaje es de $preciot y cada persona paga $preciop";
} 

   
}    
?>

<html>
<head>
    <title>Hello from Container</title>
</head>
<body>
    <?php say(); ?>
</body>
</html>
