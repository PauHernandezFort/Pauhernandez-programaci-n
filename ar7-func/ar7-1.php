<?php
  $meteorologicalData = [
    [
        'station' => 'Catarroja',
        'temperature' => 15,
        'humidity' => 85,
        'atmosphericPressure' => 1024
    ],
    [
        'station' => 'Alzira',
        'temperature' => 35,
        'humidity' => 75,
        'atmosphericPressure' => 1000
    ],
    [
        'station' => 'Almussafes',
        'temperature' => 17,
        'humidity' => 95,
        'atmosphericPressure' => 950
    ],
    [
        'station' => 'Carlet',
        'temperature' => 31,
        'humidity' => 55,
        'atmosphericPressure' => 850
    ],
];
    $media = $_POST['media'];
    $station = $_POST['numero']; 
if ($station >= 4){
    echo "datos mal introducidos";
    exit (-1) ;
}
    function FixPressure($city, $arr){
    $temp = $arr[$city]['temperature'];
    if( $temp >= 30){
        $tempGood = $temp-(($temp*25) /100);

    } else{
        $tempGood = $temp-(($temp*15) /100);
    }
    $arr[$city]['temperature'] = $tempGood;
    return $tempGood;
}

function averageTemperature($numeros ,$array){
    $arrayNum = explode(',', $numeros);
    $limit = count($arrayNum);
    $suma = 0;
    for ($i=0; $i < $limit ; $i++) { 
        if ($arrayNum[$i] >=4){
        echo "datos mal introducidos de la media";
         exit (-1);
        }
       $suma += FixPressure($arrayNum[$i], $array);
    }
    return $suma / $limit;
}

function show($arr){
   for ($i=0; $i <4 ; $i++) { 
    echo "estacion: ",$arr[$i]['station'],"<br>";
    echo "temperatura: ",$arr[$i]['temperature'],"<br>";  
    echo "humedad: ",$arr[$i]['humidity'],"<br>"; 
    echo "presion Atmosfetica: ",$arr[$i]['atmosphericPressure'],"<br>"; 
    echo "<br>";
    echo "<br>";
   }
}
show($meteorologicalData);
$meteorologicalData[$station]['temperature'] =  FixPressure ($station, $meteorologicalData);
echo "<h3>","Datos correctos con ", $meteorologicalData[$station]['station']," bien","</h3>","<br>";
show($meteorologicalData);
echo averageTemperature($media, $meteorologicalData)," Es la media";

?>
<html>
<!DOCTYPE html>
<html>
    <head>
        <title>eje7</title>
        <meta charset="utf-8">
    </head>
    <body>
      <form name="FormularioDatos" method="post" action="">
            Pon el numero de la estacion: <input type="numeric" name="numero" value=""> <br>
            Pon numeros de estacione para media con comas: <input type="numeric" name="media" value="">
            <input value="Calcular" type="submit" /> <br>
            
        </form>
    </body>
</html>
</html>