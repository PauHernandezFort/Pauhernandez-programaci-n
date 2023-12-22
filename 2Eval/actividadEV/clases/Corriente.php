<?php
class Corriente{
    protected $titular;
    protected $cantidad;

    function __construct($tit, $cant){
        $this->titular = $tit;
        $this->cantidad = $cant;
        }

        public function getTitular(){
            return $this->titular;
        }
        public function getCantidad(){
            return $this->cantidad;
        }

        public function ingresar($pasta){
            $this->cantidad +=$pasta;
        }

        public function retirar($retiro){
            if ($retiro <=  $this->cantidad){
            $this->cantidad -= $retiro;
            }
            else{
                echo "No se puede retirar tanto dinero :(";
            }
        }
}



?>