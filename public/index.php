<?php

include_once __DIR__."/../vendor/autoload.php";
include_once __DIR__."/../src/web_routes.php";

echo "<h3>Задача №1</h3>";

$worker1 = new \App\Worker\Worker_task1();
$worker1 -> name = "Иван";
$worker1 -> age = 25;
$worker1 -> salary = 1000;

$worker2 = new \App\Worker\Worker_task1();
$worker2 -> name = "Вася";
$worker2 -> age = 26;
$worker2 -> salary = 2000;

$sumSalary = $worker1 -> salary + $worker2 -> salary;
$sumAge = $worker1 -> age + $worker2 -> age;

echo "Сумма зарплат = ".$sumSalary;
echo "<br>";
echo "Сумма возрастов = ".$sumAge;

echo "<h3>Задача №2</h3>";

$worker3 = new \App\Worker\Worker_task2();
$worker3 -> setName('Иван');
$worker3 -> setAge(25);
$worker3 -> setSalary(1000);

$worker4 = new \App\Worker\Worker_task2();
$worker4 -> setName('Вася');
$worker4 -> setAge(26);
$worker4 -> setSalary(2000);

$sumSalary_task2 = $worker3 -> getSalary() + $worker4 -> getSalary();
$sumAge_task2 = $worker3 -> getAge() + $worker4 -> getAge();

echo "Сумма зарплат = ".$sumSalary_task2;
echo "<br>";
echo "Сумма возрастов = ".$sumAge_task2;

echo "<h3>Задача №3</h3>";

echo $worker3 -> setAge('150');
echo "<br>";
echo $worker3 -> getAge();

echo "<h3>Задача №4</h3>";

$worker5 = new \App\Worker\Worker_task4();

$mult = $worker5 -> getAge() * $worker5 -> getSalary();

echo "Прозиведение возраста и зарплаты =  $mult<br>";

echo "<h3>Задача №5</h3>";

$worker6 = new \App\Worker\Worker_task5();
$worker6->setName('Иван');
$worker6->setAge(25);
$worker6->setSalary(1000);

$worker7 = new \App\Worker\Worker_task5();
$worker7->setName('Вася');
$worker7->setAge(26);
$worker7->setSalary(2000);

$sumSalary = $worker6->getSalary() + $worker7->getSalary();
$sumAge = $worker6->getAge() + $worker7->getAge();

echo "Сумма зарплат: $sumSalary";
echo "<br>";
echo "Сумма возрастов: $sumAge";

$student1 = new \App\Worker\Student();
echo "<pre>";
print_r($student1);
echo "</pre>";

echo "<h3>Задача №6</h3>";

$driver1 = new App\Worker\Driver();
echo "<pre>";
print_r($driver1);
echo "</pre>";