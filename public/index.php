<?php

include_once __DIR__."/../vendor/autoload.php";
include_once __DIR__."/../src/web_routes.php";

// ООП (Объектно-ориентированное программирование)

include_once __DIR__."/../src/User.php";
include_once __DIR__."/../src/Car.php";

$user = new User('mary','Mary','25');
$user2 = new User('elena','Elena', '21');
$user3 = new User("alina", "Alina",'18');

echo $user3->sayHello();
echo "<br>";


echo "<pre>";
print_r($user);
print_r($user2);
print_r($user3);
echo "</pre>";

// Создание объетов класса Автомобиль

$car1 = new Car('Octavia', 'Skoda', '2021', 'black');
$car2 = new Car('BMW', 'X6', '2020', 'blue');
$car3 = new Car('Honda', 'Accord', '2019', 'red');

//$car1->year=2021;
//$car1->model="Octavia";
//$car1->mark="Skoda";
//$car1->color="black";
//
//$car2->year=2020;
//$car2->model="BMW";
//$car2->mark="X6";
//$car2->color="blue";
//
//
//$car3->year=2019;
//$car3->model="Honda";
//$car3->mark="Accord";
//$car3->color="red";


echo $car1->describe();
echo "<br>";
echo $car2->describe();
echo "<br>";
echo $car3->describe();

//Ссылка на один и тот же класс

$user = $user2;
$user2->name="Виктория";

echo "<pre>";
print_r($user->name)."<br>";
print_r($user2->name);
echo "</pre>";

//Клонирование объекта clone

$user = clone $user2;
$user2->name="Amelia";

echo "<pre>";
print_r($user->name)."<br>";
print_r($user2->name);
echo "</pre>";



