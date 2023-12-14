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
        $fila --;
        $columa --;
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

        //programa principal

        $matrix1 = new matrix(3,3);
        $mostrar = $matrix1->dibujar();
        echo $mostrar;
        $matrix1->elegirV(1,1,9);
        $mostrar = $matrix1->getMatrix();
        $mostrar = $matrix1->dibujar();
        echo $mostrar;

?>