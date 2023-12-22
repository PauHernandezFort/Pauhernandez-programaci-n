<?php
    class Bar extends Hosteleria{
        private $maestrosBarra;

        //construcor
        public function __construct($mes,$cama,$coci,$precio,$mB) {
        parent::__construct($mes,$cama,$coci,$precio,);
        $this->maestrosBarra=$mB;
    }

        //metodo
        public function servicioCliente(){
            $camareros = $this->camarero;
            $mesas = $this->mesas;
            
            if($camareros < $mesas){
                return "malo";
            }else{
                return "bueno";
            }

        }


    }

?>