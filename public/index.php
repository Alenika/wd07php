<?php

echo "<h3>Задача №1</h3>";

class WorkerSchool
{
    public $name;
    public $age;
    public $salary;

}

$workerSchool1 = new WorkerSchool();
$workerSchool1 -> name = 'Иван';
$workerSchool1 -> age = 25;
$workerSchool1 -> salary = 1000;

$workerSchool2 = new WorkerSchool();
$workerSchool2 -> name = 'Вася';
$workerSchool2 -> age = 26;
$workerSchool2 -> salary = 2000;

echo $workerSchool1 -> salary + $workerSchool2 -> salary;
echo "<br>";
echo $workerSchool1 -> age + $workerSchool2 -> age;

echo "<h3>Задача №2-3</h3>";

class WorkerHospital
{
    private $name;
    private $age;
    private $salary;

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    private function checkAge($age):void
    {
        $this -> age = $age;
    }

}

$workerHospital1 = new WorkerHospital();
$workerHospital1 -> setName('Иван');
$workerHospital1 -> setAge(25);
$workerHospital1 -> setSalary(1000);

$workerHospital2 = new WorkerHospital();
$workerHospital2 -> setName('Вася');
$workerHospital2 -> setAge(26);
$workerHospital2 -> setSalary(2000);

echo $workerHospital1 -> getSalary() + $workerHospital2 -> getSalary();
echo "<br>";
echo $workerHospital1 -> getAge() + $workerHospital2 -> getAge();

echo $workerHospital1 -> setAge(30);
echo "<br>";
echo $workerHospital1 -> getAge();

echo "<h3>Задача №4</h3>";

class WorkerPolice
{
    private $name;
    private $salary;
    public $age;

    public function __construct($name, $salary)
    {
        $this -> name = $name;
        $this -> salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$workerPolice1 = new WorkerPolice('Дима', 25);
$workerPolice1 -> age = 1000;
echo ($workerPolice1 -> getSalary()) * $workerPolice1 -> age;


echo "<h3>Задача №5</h3>";

class User
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }
}

class WorkerFireStation extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
}

$WorkerFireStation1 = new WorkerFireStation();
$WorkerFireStation1 -> setSalary(1000);
$WorkerFireStation1 -> setName('Иван');
$WorkerFireStation1 -> setAge(25);

$WorkerFireStation2 = new WorkerFireStation();
$WorkerFireStation2 -> setSalary(2000);
$WorkerFireStation2 -> setName('Вася');
$WorkerFireStation2 -> setAge(26);

echo $WorkerFireStation1 -> getSalary() + $WorkerFireStation2 -> getSalary();
echo "<br>";

class Student extends User
{
    private $scholarship;
    private $course;

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course): void
    {
        $this->course = $course;
    }

    public function getScholarship()
    {
        return $this->scholarship;
    }

    public function setScholarship($scholarship): void
    {
        $this->scholarship = $scholarship;
    }
}

$student1 = new Student();
$student1 -> setName('Елена');
$student1 -> setAge(21);
$student1 -> setCourse(1);
$student1 -> setScholarship(500);

echo $student1 -> getName();
echo "<br>";
echo $student1 -> getAge();

echo "<h3>Задача №6</h3>";

class Driver extends WorkerFireStation
{
    private $drivingExperience;
    private $category;

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category): void
    {
        $this->category = $category;
    }

    public function getDrivingExperience()
    {
        return $this->drivingExperience;
    }

    public function setDrivingExperience($drivingExperience): void
    {
        $this->drivingExperience = $drivingExperience;
    }
}

$driver1 = new Driver();
$driver2 = new Driver();
$driver3 = new Driver();

$driver1 -> setCategory('A');
$driver2 -> setCategory('B');
$driver3 -> setCategory('C');

echo $driver1 -> getCategory();
echo "<br>";
echo $driver2 -> getCategory();
echo "<br>";
echo $driver3 -> getCategory();
echo "<br>";



