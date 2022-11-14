<?php

namespace App\Worker;

class Worker_task4
{
    public function __construct(private $name = 'Дима', private $age = 25, private $salary = 1000)
    {
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return $this->salary;
    }
}