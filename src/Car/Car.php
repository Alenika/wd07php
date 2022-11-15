<?php

namespace App\Car;

class Car
{
    public function __construct(public $byMake, public $model, public $bodyStyle,  public $doors, public $transmission, public $color, public $fuelType) {

    }


}