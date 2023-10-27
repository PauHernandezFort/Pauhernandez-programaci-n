<!DOCTYPE html>
<html>
<head>
    <title>Cuanto cuesta la comanda</title>
</head>
<body>
    <h1>Cuanto cuesta la comanda</h1>
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
       <form name="FormularioDatos" method="post" action="index.php">
            <p> Cuanto cuesta la comanda </p>
            <br/>
            Personas : <input type="text" name="l1" value="">
            <br/> <br/>
            <input value="Calcular" type="submit" />
        </form>
    
   
</body>
</html>