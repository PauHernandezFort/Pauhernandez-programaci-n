<?php
$numeros =[''];

$numeros[0] = $_POST['1'];
$numeros[1] = $_POST['2'];
$numeros[2] = $_POST['3'];
$numeros[3] = $_POST['4'];
$numeros[4] = $_POST['5'];

$suma = $numeros[0] + $numeros[1] + $numeros[2] + $numeros[3] + $numeros[4];
$media = $suma / 5;
echo "la media es igual a $media";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo formularios</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form name="FormularioDatos" method="post" action="">
            <p> Pon numeros primos </p>
            <br/>
            Num 1: <input type="text" name="l" value="">
            <br/> <br/>
            Num 2: <input type="text" name="2" value="">
            <br/> <br/>
            Num 3: <input type="text" name="3" value="">
            <br/> <br/>
            Num 4: <input type="text" name="4" value="">
            <br/> <br/>
            Num 5: <input type="text" name="5" value="">
            <br/> <br/>
            <input value="Calcular" type="submit" />
        </form>
    </body>
</html>