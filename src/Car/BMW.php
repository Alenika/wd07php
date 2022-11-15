<?php

namespace App\Car;

class BMW extends Car
{
    public static function __callStatic ($name, $arguments) {
        return "Fatal error" . get_class()." - ".$name;
    }

    public function __invoke() {
        echo "Объект как функция";
    }

    public function __toString() {
        return $this->model." ".$this->byMake." ".$this->fuelType;
    }
}