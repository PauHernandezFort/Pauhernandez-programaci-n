<?php

function say()
{
    $alumnos = 29;
    
    if ($alumnos >= 100) {
    $total = ($alumnos * 65);
    echo "Los alumnos deben de pagar 65€ y el total es $total €";

} elseif (($alumnos >= 50) and ($alumnos <= 99)){
    $total = ($alumnos * 70);
    echo "Los alumnos deben de pagar 70€ y el total es $total €";
    }

    elseif (($alumnos >= 30) and ($alumnos <= 49)){
        $total = ($alumnos * 95);
        echo "Los alumnos deben de pagar 95€ y el total es $total €";
}
elseif ($alumnos < 30){
    $total = (400/$alumnos);
    echo "cada alumno debe de pagar $total";
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