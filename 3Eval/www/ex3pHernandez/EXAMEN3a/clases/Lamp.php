<?php
 require_once "autoloader.php";
class Lamp{
    private $id;
    private $name;
    private $posicion;
    private $marca;
    private $potencia;
    private $estado;

    public function __construct($id,$name,$pos,$mar,$pot,$est){
        $this->id=$id;
        $this->name=$name;
        $this->posicion=$pos;
        $this->marca=$mar;
        $this->potencia=$pot;
        $this->estado=$est;
        }

        public function getId()
        {
                return $this->id;
        }
       
        public function setId($id)
        {
                $this->id = $id;

        }

        public function getName()
        {
                return $this->name;
        }
        public function setName($name)
        {
                $this->name = $name;
        }


    
        public function getPos()
        {
                return $this->posicion;
        }

        public function setPos($pos)
        {
                $this->posicion = $pos;
        }

        public function getMar()
        {
                return $this->marca;
        }

        public function setMar($mar)
        {
                $this->marca = $mar;

        }

        public function getPot()
        {
                return $this->potencia;
        }
        public function setPot($pot)
        {
                $this->potencia = $potencia;

        }

        public function getEst()
        {
                return $this->estado;
        }
        public function setEst($est)
        {
                $this->estado = $est;

        }
}
?>