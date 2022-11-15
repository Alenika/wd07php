<?php

namespace App\Car;

class Lincoln extends Car
{
    private $number = 1111111;

    public function __get($name) {
        echo "Номер авто = {$this->$name}";
    }

    public function __set($name, $value) {
        echo "Success"."<br>";
        $this->$name=$value*2;
    }

}