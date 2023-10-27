<?php

function say()
{
    $cliente = 1000;
    if ($cliente <200){
        $precio = ($cliente * 95);
    }
    if (($cliente >200) and ($cliente <=300)){
        $precio = ($cliente * 85);
    }
    if ($cliente >300){
        $precio = ($cliente * 75);
    }
    echo "el precio es $precio";
    
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