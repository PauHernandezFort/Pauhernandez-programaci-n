<?php 
  require_once "autoloader.php";
class Patient{
    protected $id;
    protected $name;
    protected $adress;


public function __construct($id,$nam,$adr){
    $this->id=$id;
    $this->name=$nam;
    $this->adress=$adr;
    }
    //geters and setters
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

    public function setName($nam)
    {
        $this->name = $nam;

    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function setAdress($adr)
    {
        $this->adress = $adr;

    }
}

?>