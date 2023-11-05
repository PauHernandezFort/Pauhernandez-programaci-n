
<?php

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$cityarray = explode(',', $city);
$capitals = [];

for ($i=0; $i < count($cityarray) ; $i++) { 
    $country["city"] = $cityarray[$i];
    array_push($capitals, $country);
    }
    var_dump($capitals);
?>