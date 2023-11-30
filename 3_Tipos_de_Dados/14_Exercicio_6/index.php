<?php

$arCar = [
    'Marca' => 'Jeep', 
    'Modelo' => 'Compass', 
    'Ano' => 2023
];

print_r($arCar);

echo  $arCar['Marca'];

echo "<br>";
echo $arCar['Ano'];

echo "<br>";
$marca = $arCar['Marca'];

echo "O carro é da marca $marca";