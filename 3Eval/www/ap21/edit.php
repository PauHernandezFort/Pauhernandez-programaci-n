<?php
 require_once "autoloader.php";
$empresaId = $_GET['id'];

$prueba = new Conection();
$conn = $prueba->getConn();

$query = "SELECT * from empresa where id = '$empresaId'";
$result = mysqli_query($conn, $query);
$value = $result->fetch_array(MYSQLI_ASSOC);
$id = $value['id'];
$company =$value['company'];
$investment=$value['investment'];
$data=$value['date'];
$active=$value['active'];




$mostrar= "<html>

<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      max-width: 400px;
      width: 100%;
    }

    p {
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input {
      width: calc(100% - 12px);
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    input[type='submit'] {
      background-color: #4caf50;
      color: white;
      border: none;
      padding: 10px 15px;
      cursor: pointer;
      border-radius: 4px;
      width: 100%;
    }

    input[type='submit']:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>

  <form name='FormularioDatos' method='post' action=''>
    <p>Editar</p>
    <label for='id'>ID:</label>
    <input type='text' name='id' value='$id'>
    <label for='company'>Company:</label>
    <input type='text' name='company' value='$company'>
    <label for='investment'>Investment:</label>
    <input type='text' name='investment' value='$investment'>
    <label for='data'>Data:</label>
    <input type='text' name='data' value='$data'>
    <label for='data'>active:</label>
    <input type='text' name='active' value='$active'>
    ";
  
   $mostrar.=" <input value='Enviar' type='submit' />
  </form>
</body>
</html>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nId = $_POST['id'];
    $nCompany = $_POST['company'];
    $nInvestment = $_POST['investment'];
    $nData = $_POST['data'];
    $nActive = $_POST['active'];

    $query = "UPDATE `empresa` SET `id`='$nId', `company`='$nCompany', `investment`=$nInvestment, `date`='$nData', `active`='$nActive' WHERE id = $empresaId";
    $result = mysqli_query($conn, $query);
    header("location: index.php");

}
echo $mostrar;
?>