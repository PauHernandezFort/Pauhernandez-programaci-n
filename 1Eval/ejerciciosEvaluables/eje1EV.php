<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <h2> Para los lugares;</h2>
    <h3> peninsula = 1</h3>
    <h3> Baleares transporte aereo = 2</h3>
    <h3> canarias = 3</h3>
    
    <?php
    $kg = $_POST["1"];
    $Metros = $_POST["2"];
    $lugar = $_POST["3"];
    $paquetes = $_POST["4"];

    if ($Metros <= 0.5){
        $precio = $Metros * 50;
    }
    elseif ($Metros <= 1){
        $precio = $Metros * 75;
    }
    elseif ($Metros > 1){
        $precio = $Metros * 100;
        }

        if (($kg >5)and($kg < 10))  {
            $precio = $precio * 1.25;
        }   
        elseif (($kg >= 10) and ($kg < 15)){
            $precio = $precio * 1.50;
            }
            elseif ($kg >= 15){

                echo"demasiado peso";
            }

            if($lugar == 3){
                $precio = ($precio *1.10);
            }
            if($lugar == 2){
                $precio = ($precio *1.10);
            }
        $total = $precio * $paquetes;
        echo " precio del envio es $total €";
        
    ?>
     <form name="FormularioDatos" method="post" action="">
            <p> CÁLCULO DEL ÁREA DE UN RECTÁNGULO </p>
            <br/>
            KG: <input type="text" name="1" value="">
            <br/> <br/>
            Metros: <input type="text" name="2" value="">
            <br/> <br/>
            Lugar: <input type="number" name="3" value="">
            <br/> <br/>
            paquetes: <input type="text" name="4" value="">
            <br/> <br/>
            <input value="Calcular" type="submit" />
    
        
    </form>
</body>
</html>