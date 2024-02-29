<?php
 require_once "autoloader.php";
$visitId = $_GET['id'];

$datos = new Log('data.csv');
$limite = $datos->getLimit();

for ($i=0; $i < $limite ; $i++) { 
    $cliente = $datos->getVisit($i);

  if ($cliente ->getId() == $visitId){
    $id = $cliente ->getID();
    $patient = $cliente -> getPatient();
    $date = $cliente -> getDate();
    $amount = $cliente -> getAmount();
    $defaulter = $cliente -> getDefaulter();
  }
  

}
$mostrar= "<html>
<head>

    <style>
        form {
            border: 2px solid #A40808;
            background-color: #FFFFCC; /* Amarillo más claro */
            width: 100%;
            text-align: center;
            padding: 10px;
            margin-bottom: 20px;
            color: black; /* Texto en negro */
        }

        form p {
            font-weight: bold;
            margin-bottom: 10px;
        }

        form label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        form input[type='text'],
        form select {
            width: calc(100% - 6px);
            padding: 6px;
            margin-bottom: 10px;
            border: 1px solid #AAAAAA;
        }

        form input[type='submit'] {
            background-color: #A40808;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        form input[type='submit']:hover {
            background-color: #750606;
        }
    </style>

</head>
<a href='start.html' onclick='window.history.back();' class='back-button'>
        <img src='img/house.png' alt='' width='30' height='30'>
        </a>
<body>
    <form name='FormularioDatos' method='post' action=''>
        <h1 style='color: black;'>Edit</h1>
        <label for='pat'>Patient</label><br>
        <input type='text' id='pat' name='pat' value='$patient'><br>
        <label for='dat'>Date</label><br>
        <input type='date' id='dat' name='dat' value='$date'><br>
        <label for='amo'>Amount</label><br>
        <input type='number' id='amo' name='amo' value='$amount' required><br>
        <label for='defaulter'>Estado del Pago:</label><br>
        <select id='defaulter' name='defaulter' required>
            <option value='True'>Paid</option>
            <option value='False'>Pending</option>
        </select><br><br>
        <input value='Enviar' type='submit' />
    </form>
</body>
</html>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nPatient = $_POST['pat'];
    $nDate = $_POST['dat'];
    $nAmount = $_POST['amo'];
    $nDefaulter = $_POST['defaulter'];
    $logP = new LogPatient('dataP.csv');
    $value = $logP->serchName($nPatient);

    if($value == "False"){
        header("location: noPatient.html");
      
    }
    else{
    $datos->edit($id,$nPatient, $nDate, $nAmount, $nDefaulter);
    header("location: index.php");
    }
}
echo $mostrar;
?>