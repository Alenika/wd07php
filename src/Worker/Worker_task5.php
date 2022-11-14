<?php

namespace App\Worker;

class Worker_task5 extends User
{
    private $salary;

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }

}