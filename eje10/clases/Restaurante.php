<?php
    class Restaurante extends Hosteleria{
        private $estrellaMichelin;

        //construcor
        public function __construct($mes,$cama,$coci,$precio,$estrella) {
        parent::__construct($mes,$cama,$coci,$precio,);
        $this->estrellaMichelin=$estrella;
    }

        //metodos
        public function servicioCliente(){
    
            if($this->camarero < $this->mesas){
                return "malo";
            }else{
                return "bueno";
            }

        }

    }
    ?>