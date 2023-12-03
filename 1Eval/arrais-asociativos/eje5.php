<?php
$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";
$array = explode(';', $data);
$array3 = [];

foreach ($array as $final) {
    $pareja = explode(', ', $final);
    $ciudad = $pareja[0];
    $pais = $pareja[1];
    $array3[] = ["city" => $ciudad, "country" => $pais];
}

echo "<pre>";
var_dump($array3);
echo "</pre>";

?>