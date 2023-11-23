<?php
    session_start();
?>
<html>
<head>
    <title>ex1aEval</title>
</head>
<body>
    <h1>Examen 1a Evaluación</h1>
    <!--formulario para recoger las filas y columnas de inicio y fin-->
    <form name="FormularioDatos" method="post" action="">
            <p> Pon Las Casillas </p>
            <br/>
            Fila origen: <input type="text" name="fO" value="">
            <br/> <br/>
            Columna origen: <input type="text" name="cO" value="">
            <br/> <br/>
            fila destino: <input type="number" name="fD" value="">
            <br/> <br/>
            Columna destino: <input type="text" name="cD" value="">
            <br/> <br/>
            <input value="Calcular" type="submit" />
    
        
    </form>
</body>
</html>
    
<?php
    $numeros = [1,2,3,4,5,6];
    $colores = ['RED','YEL','GRE','BLU','BLA','WHI'];
    //usa esto si no los generas tú
   // $combinaciones=[[1,'RED'],[1,'YEL'],[1,'GRE'],[1,'BLU'],[1,'BLA'],[1,'WHI'],[2,'RED'],[2,'YEL'],[2,'GRE'],[2,'BLU'],[2,'BLA'],[2,'WHI'],[3,'RED'],[3,'YEL'],[3,'GRE'],[3,'BLU'],[3,'BLA'],[3,'WHI'],[4,'RED'],[4,'YEL'],[4,'GRE'],[4,'BLU'],[4,'BLA'],[4,'WHI'],[5,'RED'],[5,'YEL'],[5,'GRE'],[5,'BLU'],[5,'BLA'],[5,'WHI'],[6,'RED'],[6,'YEL'],[6,'GRE'],[6,'BLU'],[6,'BLA'],[6,'WHI']];
    //$tablero = [[17,8,33,0,26,28],[16,9,1,18,3,34],[19,21,2,10,27,32],[20,35,4,30,11,31],[22,7,6,13,25,12],[23,24,15,14,29,5]];
    $filaO = $_POST['fO'];
    $columnaO = $_POST['cO'];
     $filaD = $_POST['fD'];
      $columnaD = $_POST['cD'];
        $combinaciones=generarCombinaciones($numeros,$colores);
    $tablero = generarTablero($colores);
   
    if (!isset($_SESSION['tablero'])) {
        $_SESSION['tablero'] = $tablero;
    } 
    
    //posibles combinaciones mezclando los dos arrays
   /* $combinaciones=generarCombinaciones($numeros,$colores);
    dibujarTablero($_SESSION['tablero'], $combinaciones);
    */

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       //comprueba si la tirada es permitida
       if ($filaO == $filaD){
        echo "tirada permitida <br>";
         //si es permitida, comprueba si es válida
         if (tiradaValida($_SESSION['tablero'], $combinaciones, $filaO, $columnaO, $filaD, $columnaD)){
            echo "Tirada válida <br>";
        }else{
            echo "Tirada NO válida <br>";
        }
       }
       elseif ($columnaO == $columnaD){
        echo "tirada permitida <br>";
         //si es permitida, comprueba si es válida
         if (tiradaValida($_SESSION['tablero'], $combinaciones, $filaO, $columnaO, $filaD, $columnaD)){
            echo "Tirada válida <br>";
        }else{
            echo "Tirada NO válida <br>";
        }
       } else{
        echo "tirada no permitida <br>";
        
       }


    
    }
    
    
    //FUNCIONES

    //desarrolla esta función si no usas la estructura dada $combinaciones
    /*function generarCombinaciones($array1,$array2): array{
       
    }
   
*/    
function generarCombinaciones($array1,$array2): array{
    $combinaciones = [];
 

    for ($i=0; $i <=36 ; $i++) { 
        $combinaciones[$i][0] = $array1[random_int(0,5)];
        $combinaciones[$i][1] = $array2[random_int(0,5)];

      
    }
    return $combinaciones;
    }
function generarTablero($arr): array{
    $tablero = [];
    $numeros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36];
   
   
    for ($p=0; $p <6 ; $p++) { 
        for ($y=0; $y <6 ; $y++) { 
            $limte = count($numeros);
            $aleatorio = random_int(0,$limte);
            $tablero[$p][$y] = $numeros[$aleatorio];
            array_splice($numeros,$aleatorio,1);
        }
        
    }

    return $tablero;

}
    function dibujarTablero($arrayTablero, $arrayCombinaciones){
        for ($i=0; $i <6 ; $i++) { 

            for ($y=0; $y <6 ; $y++) { 
               $posicon = $arrayTablero[$i][$y];
            echo $arrayCombinaciones[$posicon][0],"-", $arrayCombinaciones[$posicon][1]," ";
    
            }
            echo "<br>";
        }
        }
        
    dibujarTablero($tablero,$combinaciones);

    
    function tiradaValida($arrayTablero, $arrayCombinaciones, $filaOrigen,$columnaOrigen, $filaDestino, $columnaDestino): bool{
        
        
        if($arrayCombinaciones[$arrayTablero[$filaOrigen][$columnaOrigen]][0] == $arrayCombinaciones[$arrayTablero[$filaDestino][$columnaDestino]][0]){
            return true;
        }
            
            elseif($arrayCombinaciones[$arrayTablero[$filaOrigen][$columnaOrigen]][1] == $arrayCombinaciones[$arrayTablero[$filaDestino][$columnaDestino]][1]){
                return true;
    } 
      else{
        return false;
    }
}

    //desarrolla esta función si no usas la estructura dada $tablero
    //function generarTablero($arr): array{
  
    //}
?>