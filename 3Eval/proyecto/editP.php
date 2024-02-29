<?php
 require_once "autoloader.php";
$patientId = $_GET['id'];

$datos = new LogPatient('dataP.csv');
$limite = $datos->getLimit();

for ($i=0; $i < $limite ; $i++) { 
    $patient = $datos->getPatient($i);

  if ($patient ->getId() == $patientId){
    $id = $patient ->getID();
    $name = $patient -> getName();
    $adress = $patient -> getAdress();
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
        <label for='pat'>Id</label><br>
        <input type='text' id='id' name='id' value='$id' readonly><br>
        <label for='dat'>Name</label><br>
        <input type='text' id='nam' name='nam' value='$name'><br>
        <label for='amo'>Adress</label><br>
        <input type='text' id='adr' name='adr' value='$adress'><br>
        <input value='Enviar' type='submit' />
    </form>
</body>
</html>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nName = $_POST['nam'];
    $nAdress = $_POST['adr'];
    $visits= new Log('data.csv');
    $datos->edit($id, $nName, $nAdress);
    $visits->changeName($name,$nName);
    header("location: indexP.php");

}
echo $mostrar;
?>