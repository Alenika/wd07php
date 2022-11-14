<?php

namespace App\Worker;

class Worker_task2
{
   private $name;
   private $age;
   private $salary;

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setAge($age): void
    {
        $this->age = $age;

        if ( !$this->checkAge() ) {
            echo "<br>Возраст введен некорректно!";
        }
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    // Задача №3
    private function checkAge() {

        if ( $this->age >= 1 && $this->age <= 100 ) {
            return true;
        } else {
            return false;
        }
    }
}