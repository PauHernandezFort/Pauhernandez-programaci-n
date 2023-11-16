
<!DOCTYPE html>
<html>
    <head>
        <title>Futibol</title>
        <meta charset="utf-8">
    </head>
    <body>
      <form name="FormularioDatos" method="post" action="">
            empatados: <input type="numeric" name="e" value="">
            <br/>
            perdidios: <input type="numeric" name="p" value="">
            <br/>
            ganados: <input type="numeric" name="g" value="">
            <br/>

        <input value="Calcular" type="submit" /> <br>
        </form>
    </body>
</html>
<?php


$ganado = $_POST['g'];
$perdidio = $_POST['p'];
$empatado = $_POST['e'];

calculaPuntos($ganado,$perdidio,$empatado);
function calculaPuntos ($g,$p,$e){
    $arr = [
        "puntos" => 0,
        "porcentaje" => 0,
    ];
    $puntos = ($g*3) + $e;
    $total = ($g + $p + $e) *3;
    $porcentaje = ($puntos * 100) / $total;
    $arr["puntos"] = $puntos;
    $arr["porcentaje"] = $porcentaje;

    return $arr;
}
echo "<pre>";
var_dump(calculaPuntos($ganado,$perdidio,$empatado));
echo "</pre>";
?>
