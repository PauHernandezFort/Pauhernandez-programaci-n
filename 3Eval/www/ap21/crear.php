<?php
 require_once "autoloader.php";
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
    <p>Añadir</p>
    <label for='id'>ID:</label>
    <input type='text' name='id' value=''>
    <label for='company'>Company:</label>
    <input type='text' name='company' value=''>
    <label for='investment'>Investment:</label>
    <input type='text' name='investment' value=''>
    <label for='data'>Data:</label>
    <input type='text' name='data' value=''>
    <label for='defaulter'>active:</label>
    <input type='text' name='active' value=''>
    <br/><br/>";
  
   $mostrar.=" <input value='Enviar' type='submit' />
  </form>
</body>
</html>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $company = $_POST['company'];
    $investment = $_POST['investment'];
    $data = $_POST['data'];
    $active = $_POST['active'];
       
    $prueba = new Conection();
    $conn = $prueba->getConn();
    $query = "INSERT INTO `empresa`(`id`, `company`, `investment`, `date`, `active`) VALUES ('$id','$company','$investment','$data','$active')";
    $result = mysqli_query($conn, $query);

    
    header("location: index.php");

}
echo $mostrar;
?>