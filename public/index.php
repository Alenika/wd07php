<?php

include_once __DIR__."/../vendor/autoload.php";
include_once __DIR__."/../src/web_routes.php";


$audi1 = new \App\Car\Audi('Audi', 'A3', 'Sedan',2, 'Automatic', 'Black', 'Gasoline');

echo "<pre>";
echo var_dump($audi1);
echo "</pre>";

echo $audi1->notExist()."<br>";

$bmw1 = new \App\Car\BMW('BMW', 'Corsair FWD', 'SUV',4, 'Automatic', 'Green', 'Gas');
//echo $bmw1::ag(1,2,3);
//
//echo "<br>";
//$bmw1();

echo "<br>";
echo "<pre>";
echo var_dump($bmw1);
echo "</pre>";
echo $bmw1;

echo "<br>";
$lincoln1 = new \App\Car\Lincoln('Lincoln', 'A3', 'Sedan',2, 'Automatic', 'Black', 'Gasoline');

echo $lincoln1->number;
echo $lincoln1 ->number = 2222222;
echo $lincoln1->number;

