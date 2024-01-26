Id<?php
   require_once "autoloader.php";
class Empresa{
    protected $id;
    protected $company;
    protected $investment;
    protected $data;
    protected $active;
    
    // CONSTRUCOR

    public function __construct($id,$com,$inv,$dat,$act){
        $this->id = $id;
        $this->company = $com;
        $this->investment = $inv;
        $this->data = $dat;
        $this->active = $act;
    }
        //GET SET
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }
    public function getInvestment()
    {
        return $this->investment;
    }
    public function setInvestment($investment)
    {
        $this->investment = $investment;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    } 
    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

}
?>