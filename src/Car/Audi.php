<?php

namespace App\Car;

class Audi extends Car
{
    public function __call(string $name, array $arguments)
    {
        return "Fatal error" . get_class()." - ".$name;
    }

    public function __destruct()
    {
        echo "Уничтожается";
    }


}