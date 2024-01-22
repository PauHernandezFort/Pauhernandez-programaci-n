<!DOCTYPE html>

<html lang="en">
<?php
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
class Cartera{
    protected array $clientes;

    // CONSTRUCOR
    public function __construct($arr){
        $this-> logData($arr);
} // GET SET
    public function getClientes($num)
{
    return $this->clientes[$num];
}

    public function setCliente($cliente,$num)
{
    $this->clientes[$num] = $cliente;

}

    // METODOS
    public function logData($arr){
        $limite = count($arr);
        for ($i=0; $i <$limite ; $i++) { 
            $id = $arr[$i]["ID"];
            $company = $arr[$i]["Company"];
            $investment = $arr[$i]["Investment"];
            $date = $arr[$i]["Date"];
            $active = $arr[$i]["active"];
            $objeto = new Empresa($id,$company,$investment,$date,$active);
            $this->setCliente($objeto,$i);
        }
    }
    public function darwList(){
           $limite = count($this->clientes); { 
            $mostrar = ' <table class="redTable">';
            for ($i=0; $i < $limite; $i++) { 
                $posicion = $this->getClientes($i);
                $id = $posicion ->getId();
                $company = $posicion ->getCompany();
                $investment = $posicion ->getInvestment();
                $data = $posicion ->getData();
                $active = $posicion ->getActive();
                $mostrar.="<tr>
                    <td>$id</td>";
                    $vip = $this->isVip($investment);
                    $mostrar.= "$vip  $company </td>"; 
                    $mostrar.=" <td>$investment €</td>
                    <td>$data</td>";
                    if($active == "True"){
                    $mostrar .= "<td><img src='img/img05.gif'> </td>
                    </tr>";
                    }
                    else{
                        $mostrar .= "<td><img src='img/img06.gif'> </td>
                     </tr>";
                    }
            }
            $mostrar.= "</table>";
            return $mostrar;
        }

    }
    public function isVip($investment){
        $vip = "no";
        if($investment > 1000000){
            $vip = "<td class='vip'>";
        }else{
            $vip = "<td class='noVip'>";
        }
        return $vip;
    }
  
}


$data = [
	[
		"ID" => "BBX28AIL5SZ",
		"Company" => "In Aliquet Corp.",
		"Investment" => "4472729",
		"Date" => "2020-07-09",
		"active" => "True"
	],
	[
		"ID" => "SBV55WFC5MV",
		"Company" => "Integer Vulputate Risus Institute",
		"Investment" => "4471554",
		"Date" => "2019-12-27",
		"active" => "False"
	],
	[
		"ID" => "TEF51NBI7QF",
		"Company" => "Vivamus Nibh LLC",
		"Investment" => "8919033",
		"Date" => "2018-05-28",
		"active" => "False"
	],
	[
		"ID" => "CBM81YFY6XR",
		"Company" => "Eu LLP",
		"Investment" => "8811172",
		"Date" => "2020-06-06",
		"active" => "False"
	],
	[
		"ID" => "PTH79SXU5CW",
		"Company" => "Urna Vivamus Associates",
		"Investment" => "8397876",
		"Date" => "2020-01-12",
		"active" => "False"
	],
	[
		"ID" => "JDW43DAH5CD",
		"Company" => "Varius Orci In LLP",
		"Investment" => "8835239",
		"Date" => "2017-12-14",
		"active" => "False"
	],
	[
		"ID" => "HJL62XCJ5KX",
		"Company" => "Dolor Limited",
		"Investment" => "797550",
		"Date" => "2019-07-06",
		"active" => "False"
	],
	[
		"ID" => "BEG74SPW6JD",
		"Company" => "Suspendisse Eleifend Cras Corporation",
		"Investment" => "261822",
		"Date" => "2018-07-06",
		"active" => "False"
	],
	[
		"ID" => "KIC32QXK5PF",
		"Company" => "Suscipit Nonummy Ltd",
		"Investment" => "1668744",
		"Date" => "2019-12-05",
		"active" => "True"
	],
	[
		"ID" => "RBX62ZFB3GH",
		"Company" => "Ligula Incorporated",
		"Investment" => "9669887",
		"Date" => "2019-07-28",
		"active" => "True"
	],
	[
		"ID" => "SSQ55BYQ3SU",
		"Company" => "In Scelerisque Associates",
		"Investment" => "4982932",
		"Date" => "2020-04-21",
		"active" => "True"
	],
	[
		"ID" => "UXF17XKT9WD",
		"Company" => "Turpis Nec Ltd",
		"Investment" => "2281779",
		"Date" => "2018-09-23",
		"active" => "False"
	],
	[
		"ID" => "UDP44RHT1EP",
		"Company" => "Mollis Nec Cursus LLP",
		"Investment" => "988034",
		"Date" => "2018-09-09",
		"active" => "True"
	],
	[
		"ID" => "BDB43DDW3RX",
		"Company" => "Diam At Associates",
		"Investment" => "5884557",
		"Date" => "2019-06-26",
		"active" => "True"
	],
	[
		"ID" => "HUR75PZN3YB",
		"Company" => "Lacus Cras Industries",
		"Investment" => "4838613",
		"Date" => "2017-12-20",
		"active" => "True"
	],
	[
		"ID" => "HRA25DQF5QT",
		"Company" => "Mollis Lectus Company",
		"Investment" => "4639909",
		"Date" => "2018-08-15",
		"active" => "True"
	],
	[
		"ID" => "ZXT62QWY5NC",
		"Company" => "Quam Dignissim Incorporated",
		"Investment" => "7037731",
		"Date" => "2018-06-18",
		"active" => "True"
	],
	[
		"ID" => "XGO44WXW3EC",
		"Company" => "Interdum Libero Dui LLC",
		"Investment" => "2886694",
		"Date" => "2019-03-10",
		"active" => "False"
	],
	[
		"ID" => "ITE69NTR1AX",
		"Company" => "Ipsum Ac Foundation",
		"Investment" => "9156702",
		"Date" => "2018-09-17",
		"active" => "True"
	],
	[
		"ID" => "GCQ53TEH8BN",
		"Company" => "Vitae Aliquam PC",
		"Investment" => "6904158",
		"Date" => "2019-07-04",
		"active" => "False"
    ]
];

?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <table class="redTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th>
                <th>Date</th>
                <th>Active</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="5">

                </td>
            </tr>
        </tfoot>
        <tbody>
           <?php
            $prueba = new Cartera($data);
            $id = $prueba->getClientes(5);
            $prueba2= $id->getCompany();
            $mostrar= $prueba->darwList();
            echo $mostrar;
           ?>
        </tbody>
    </table>


</body>

</html>


