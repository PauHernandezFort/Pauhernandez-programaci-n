<?php
$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
 echo numeros($numero2,$numero1);

function numeros( $num1, $num2){
    $suma = 0;
    if($num1 % 2 !==0){
        $num1 ++;
    }
    $suma = $num1;
    while($num1 <= $num2){
        $suma += $num1;
        $num1 +=2;
    }
    return $suma;
}

?>
    <head>
        <title>suma numeros</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form name="FormularioDatos" method="post" action="index.php">
            <p> suma </p>
            <br/>
         Numero grande <input type="text" name="num1" value="">
            <br/> <br/>
            Numero pequeño: <input type="text" name="num2" value="">
            <br/> <br/>
            <input value="Calcular" type="submit" />
        </form>
    </body>
</html>