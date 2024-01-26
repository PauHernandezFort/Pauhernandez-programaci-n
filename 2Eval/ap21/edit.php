<?php
 require_once "autoloader.php";
$empresaId = $_GET['id'];

$datos = new cartera('data.csv');
$limite = $datos->getLimite();

for ($i=0; $i < $limite ; $i++) { 
    $cliente = $datos->getClientes($i);

  if ($cliente ->getId() == $empresaId){
    $id = $cliente ->getID();
    $company = $cliente -> getCompany();
    $investment = $cliente -> getInvestment();
    $data = $cliente -> getData();
    $active = $cliente -> getActive();
  }
  

}


$mostrar= "<html>
  <form name='FormularioDatos' method='post' action=''>
    <p> Editar </p>
    <br/>
    id <input type='text' name='id' value='$id'>
    <br/>
    company <input type='text' name='company' value='$company'>
    <br/>
    investment <input type='text' name='investment' value='$investment'>
    <br/>
    data <input type='text' name='data' value='$data'>
    <br/>
    active <input type='text' name='active' value='$active'>
    <br/> <br/>
    <input value='Enviar' type='submit' />
  </form>
</html>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nId = $_POST['id'];
    $nCompany = $_POST['company'];
    $nInvestment = $_POST['investment'];
    $nData = $_POST['data'];
    $nActive = $_POST['active'];

    $datos->edit($id,$nId, $nCompany, $nInvestment, $nData, $nActive);
    header("location: index.php");

}
echo $mostrar;
?>