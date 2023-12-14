<!DOCTYPE html>
<html>
    <head>
        <title>programa</title>
        <meta charset="utf-8">
    </head>
    <body>
      <form name="FormularioDatos" method="post" action="">
            pon el numero de filas de la primera matriz <input type="numeric" name="1f" value="">
            <br/>
            pon el numero de columnas de la primera matriz : <input type="numeric" name="1c" value="">
            <br/>
            pon el numero de filas de la segunda matriz <input type="numeric" name="2f" value="">
            <br/>
            pon el numero de columnas de la segunda matriz : <input type="numeric" name="2c" value="">
            <br/>
        <input value="Calcular" type="submit" /> <br>
        </form>
    </body>
</html>


<?php
class matrix{
    private float $filas;
    private float $columnas;
    private  $matrix;
    //construcor
    function __construct($fil, $col){
        $this->filas = $fil;
        $this->columnas = $col;
        $this->crearM();
        }
        //Metodos
    private function crearM(){
        $mat = [];
        for ($i=0; $i < $this->filas; $i++) { 
            for ($j=0; $j < $this->columnas ; $j++) { 
                $mat[$i][$j] = rand(0,9);
            }
        }
        $this->matrix = $mat;
    }    
    public function getMatrix(){
        return $this->matrix;
    }
    public function getFilas(){
        return $this-> filas;
    }
    public function getColumnas(){
        return $this-> columnas;
    }
    public function elegirV($fila, $columa, $valor,){
       
        $this->matrix[$fila][$columa]=$valor;
    }
    public function dibujar(){
        $tabla = "<table border='1'";
        $fil = $this->filas;
        $colu = $this->columnas;
        $arr = $this->matrix;
        for ($i=0; $i < $fil ; $i++) { 
            $tabla .="<tr>";
            for ($j=0; $j <$colu ; $j++) { 
                $numero = $arr[$i][$j];
                $tabla.= "<th> $numero </th>";
            }
            $tabla .= "</tr>";
        }
        $tabla .= "</table>";
        return $tabla;
    }
}  
     class Operaciones{
        private $matriz1;
        private $matriz2;
        function __construct($m1, $m2){
            $this->matriz1 = $m1;
            $this->matriz2 = $m2;
            }
        public function suma(){
            $m1= $this->matriz1;
            $m2= $this->matriz2;
            $fila1 = $m1->getFilas();
            $colum1 = $m1->getColumnas();
            $fila2 = $m2->getFilas();
            $colum2 = $m2->getColumnas();
            $arr1 = $m1->getMatrix();
            $arr2 = $m2->getMatrix();
            $arr3 =[];
            if($colum1 == $colum2){
                if($fila1==$fila2){
                    for ($i=0; $i <$fila1 ; $i++) { 
                        for ($j=0; $j <$colum1 ; $j++) { 
                            $arr3[$i][$j] = ($arr1[$i][$j] + $arr2[$i][$j]);
                        }                        
                    }
                    $matrizS = new matrix($fila1,$colum1);
                    for ($i=0; $i <$fila1 ; $i++) { 
                      
                        for ($j=0; $j <$colum1 ; $j++) { 
                            $matrizS->elegirV($i,$j,$arr3[$i][$j]);
                
                        }                       
                    }
                    return $matrizS;
                }   
                else{
                    echo "Las matrices son incopatibles";
                }

            }
            else{
                echo "Las matrices son incopatibles";
            }
        }
     }

   
 

        //programa principal
        $filas1 = $_POST['1f'];
        $columnas1 = $_POST['1c'];
        $filas2 = $_POST['2f'];
        $columnas2 = $_POST['2c'];
        $matrix1 = new matrix($filas1,$columnas1);
        $matrix2 = new matrix($filas2,$columnas2);
        $mostrar = $matrix1->dibujar();
        echo $mostrar;
        echo "<br>";
        $mostrar2 = $matrix2->dibujar();
        echo $mostrar2;
        echo "<br>";
        $operacion1 = new Operaciones($matrix1,$matrix2);
       $suma= $operacion1->suma();
       $mostrar3 = $suma->dibujar();
       echo $mostrar3;
    
?>