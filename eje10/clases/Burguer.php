<?php
    class Burguer extends Hosteleria{
        private $servicioDomicilio;

        //construcor
        public function __construct($mes,$cama,$coci,$precio,$serv) {
        parent::__construct($mes,$cama,$coci,$precio,);
        $this->servicioDomicilio=$serv;
    }

        //metodos
        public function servicioCliente(){
            $cocineros = $this->cocineros;
            $mesas = ($this->mesas/3);
            if($cocineros < $mesas){
                return "malo";
            }else{
                return "bueno";
            }

        }

    }
    ?>