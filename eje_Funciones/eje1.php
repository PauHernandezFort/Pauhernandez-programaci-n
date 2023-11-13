<?php
$edad1 = $_POST['e1'];
$edad2 = $_POST['e2'];
func($edad1, $edad2);
function func($e1, $e2){
    return $e1 - $e2;
}
$diferencia = func($edad1, $edad2);
if($diferencia <0){
    $diferencia *= -1;
}
echo " la diferencia de edad es de $diferencia años";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>POn las 2 edades</title>
        <meta charset="utf-8">
    </head>
    <body>
      <form name="FormularioDatos" method="post" action="">
            edad1: <input type="numeric" name="e1" value="">
            <br/>
            edad2: <input type="numeric" name="e2" value="">
            <input value="Calcular" type="submit" /> <br>
        </form>
    </body>
</html>