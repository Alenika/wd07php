<?php

class Car
{
    // Зададим свойства (по сути переменные класса):

    public function __construct(public $model, public $mark, public $year, public $color)
    {
    }

    function describe()
    {
        echo "Описание автомобиля:" . "<br>" .
            $this->mark . "<br>" .
            $this->model . "<br>" .
            $this->year . "<br>" .
            $this->color . "<br>";
    }
}
