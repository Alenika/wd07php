<?php

class User
{
    // Зададим свойства (по сути переменные класса):
    public $login;
    public $name;
    public $age;

    function sayHello()
    {
        echo "Hello ". $this -> name;
    }

    public function __construct($login, $name, $age)
    {
        $this->login=$login;
        $this->name=$name;
        $this->age=$age;
    }
}