<?php
 require_once "autoloader.php";

$datos = new LogPatient('dataP.csv');
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
        <h1 style='color: black;'>NEW</h1>
        <label for='pat'>Name</label><br>
        <input type='text' id='nam' name='nam' value=''><br>
        <label for='dat'>Adress</label><br>
        <input type='text' id='adr' name='adr' value=''><br>
        <input value='Enviar' type='submit' />
    </form>
</body>
</html>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['nam'];
    $adress = $_POST['adr'];;
    $patients = $datos->getPatients();
    end($patients);
    $idL = current($patients);
    $id = $idL->getId() +1;
    $newItem = new Patient($id,$name,$adress);
    $datos->create($newItem);
    header("location: indexP.php");

}
echo $mostrar;
?>