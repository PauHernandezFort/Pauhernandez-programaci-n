<?php
$romano = ["I","II","III","IV","V","VI","VII","VIII","IX","X",];
$numero = $_POST['n1'];

romano($numero, $romano);
function romano($n1){
    global $romano;
 $roma = $romano[$n1 -1];
return $roma;
} 
$numf = romano($numero,$romano);
echo $numf;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>POn las 2 edades</title>
        <meta charset="utf-8">
    </head>
    <body>
      <form name="FormularioDatos" method="post" action="">
            numero: <input type="numeric" name="n1" value="">
            <bçr/>
        <input value="Calcular" type="submit" /> <br>
        </form>
    </body>
</html>