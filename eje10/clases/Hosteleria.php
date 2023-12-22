<?php
    abstract class Hosteleria{
        protected  $mesas;
        protected $camarero;
        protected $cocineros;
        protected $precioMenu;

        //construcor
        public function __construct($mes,$cama,$coci,$precio) {
            $this->mesas = $mes;
            $this->camarero = $cama;
            $this->cocineros = $coci;
            $this->precioMenu = $precio;
        }

        //metodos

        abstract function servicioCliente();
    }

?>