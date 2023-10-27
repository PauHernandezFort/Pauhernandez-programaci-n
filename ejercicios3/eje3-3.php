<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo formularios</title>
        <meta charset="utf-8">
    </head>
    <body>

    <?php
$arr1 = [];
$contador = 0;
$numero = $_POST['n'];
$num3 = 1;
$num2 = 2;
$cero = 0;


 while ($numero > $contador ){
    while( $num2 >= $num3){
        if  (($num2 % $num3) == 0){
            $cero ++ ;       
    }
    $num3 ++;
    }
    $num3 =1;
    if ($cero == 2) {
        $lista = ($contador +1);
        $arr1[$contador] = $num2;
        echo "El primo numero $lista es: ", $arr1[$contador],"<br>";
        $contador ++ ;
       
    } 
    $num2 ++;
    $cero = 0;
   
}
?> 
        <form name="FormularioDatos" method="post" action="">
            <p> Pon numeros primos </p>
            <br/>
            Num: <input type="numeric" name="n" value="">
            <input value="Calcular" type="submit" /> <br>
        </form>
    </body>
</html>