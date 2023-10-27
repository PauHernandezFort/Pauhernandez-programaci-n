<?php

function say()
{
    $tipo = "b";
    $tamaño = "1";
    
    if (($tipo == "a") and ($tamaño == 1)){
        echo " se añaden 20 centimos al precio del kilo";
    }
    if (($tipo == "a") and ($tamaño == 2)){
        echo "se añaden 30 centimos al precio del kilo";
    }
    if (($tipo == "b") and ($tamaño == 1)){
        echo "se rebajan 30 centimos al precio del kilo";
    }
    if (($tipo == "b") and ($tamaño == 2)){
        echo "se rebajan 50 centimos al precio del kilo";
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
