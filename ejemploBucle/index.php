<!DOCTYPE html>
<html>
<head>
    <title>Suma de 4 números</title>
</head>
<body>
    <h1>Suma de 4 números</h1>
    <?php
    $cliente = $_POST['l1'];
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
?>
       <form name="FormularioDatos" method="post" action="back.php">
            <p> CÁLCULO DEL ÁREA DE UN RECTÁNGULO </p>
            <br/>
            LADO 1: <input type="text" name="l1" value="">
            <br/> <br/>
            <input value="Calcular" type="submit" />
        </form>
    
   
</body>
</html>