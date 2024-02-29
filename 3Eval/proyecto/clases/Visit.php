<?php 
 require_once "autoloader.php";
class Visit{
    protected $id;
    protected $patient;
    protected $date;
    protected $amount;
    protected $defaulter;


public function __construct($id,$pat,$amo,$dat,$defa){
    $this->id=$id;
    $this->patient=$pat;
    $this->date=$dat;
    $this->amount=$amo;
    $this->defaulter=$defa;
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

    public function getPatient()
    {
        return $this->patient;
    }

    public function setPatient($patient)
    {
        $this->patient = $patient;
      

    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;

    }

    public function getDefaulter()
    {
        return $this->defaulter;
    }

    public function setDefaulter($defaulter)
    {
        $this->defaulter = $defaulter;

    }

    
    }





?>