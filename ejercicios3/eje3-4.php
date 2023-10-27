<!DOCTYPE html>
<html>
<head>
    <title>Suma de 4 números</title>
</head>
<body>
    <h1>Suma de 4 números</h1>
    
    <?php

    $dni = $_POST["dni"];
    $letra = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
    $si = $dni % 23 ;

    echo"la letra es",$letra[$si];


    ?>
     <form name="FormularioDatos" method="post" action="">
            <p> CÁLCULO DEL ÁREA DE UN RECTÁNGULO </p>
            <br/>
            DNI: <input type="text" name="dni" value="">
            <br/> <br/>

            <input value="Calcular" type="submit" />
    
        
    </form>
    
</body>
</html>