<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics and Global Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .statistic {
            margin-bottom: 10px;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 6px;
        }

        .statistic label {
            font-weight: bold;
            color: #555;
        }

        .statistic-value {
            font-size: 20px;
            color: #007bff;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="start.html" onclick="window.history.back();" class="back-button">
        <img src="img/house.png" alt="" width="30" height="30">
    </a>
    <div class="container">
        <h1>Statistics and Global Data</h1>
        <?php
         require_once "autoloader.php";
        $datos = new Log('data.csv');
        $patients= new LogPatient('dataP.csv');
        $array = $datos-> getVisits();
        $tAmount= 0;
        foreach ($array as $visit) {
            $suma=$visit->getAmount() ;
            $tAmount += $suma;

        }
      
        $tAmountNo =0;
        $tAmountSi =0;
        $contadorNo=0;
        $contadorSi=0;

        $nPatientP=0;
        $nPatientNp=0;
        $nPatient=0;

        foreach ($array as $visit) {
            $suma=$visit->getAmount() ;
        $defaulter = $visit->getDefaulter();
            if ($defaulter == "True") {
                $tAmountSi +=$suma;
                $contadorSi++;
            } else{
                $tAmountNo +=$suma ;
                $contadorNo++;
            }    

        }
        $balance= $tAmountSi - $tAmountNo;
        $names =$datos->getAllName();
        foreach($names as $name){
          $arrayPatient=[];
          foreach ($array as $linea){
          if ($name == $linea ->getPatient()){
              array_push($arrayPatient,$linea); 
          }
            $pay = "yes";
            foreach($arrayPatient as $person){
              if ($person ->getDefaulter()== "False" ){
                $pay="no";
              }

            }
          }
          if($pay == "yes"){
            $nPatientP ++;
          } else{
            $nPatientNp ++;
          }

        }

        $arrayP = $patients->getPatients();
        foreach ($arrayP as $patients) {
          $nPatient ++;
        }
        ?>
        <div class="statistic">
            <label>Total amount in invoices:</label>
            <div class="statistic-value"><?php echo $tAmount; ?></div>
        </div>
        <div class="statistic">
            <label>Total amount of collected visits:</label>
            <div class="statistic-value"><?php echo $tAmountSi; ?></div>
        </div>
        <div class="statistic">
            <label>Total amount of uncollected visits:</label>
            <div class="statistic-value"><?php echo $tAmountNo; ?></div>
        </div>
        <div class="statistic">
            <label>Total balance:</label>
            <div class="statistic-value"><?php echo $balance; ?></div>
        </div>
        <div class="statistic">
            <label>Number of collected visits:</label>
            <div class="statistic-value"><?php echo $contadorSi; ?></div>
        </div>
        <div class="statistic">
            <label>Number of uncollected visits:</label>
            <div class="statistic-value"><?php echo $contadorNo; ?></div>
        </div>
        <div class="statistic">
            <label>Total number of patients:</label>
            <div class="statistic-value"><?php echo $nPatient; ?></div>
        </div>
        <div class="statistic">
            <label>Number of patients who have paid:</label>
            <div class="statistic-value"><?php echo $nPatientP; ?></div>
        </div>
        <div class="statistic">
            <label>Number of patients who have not paid:</label>
            <div class="statistic-value"><?php echo $nPatientNp; ?></div>
        </div>
    </div>
</body>
</html>