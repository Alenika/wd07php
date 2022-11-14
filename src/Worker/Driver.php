<?php

namespace App\Worker;

class Driver extends Worker_task5
{
    private $drivingExperience;
    private $category;

    public function setDrivingExperience($drivingExperience): void
    {
        $this->drivingExperience = $drivingExperience;
    }

    public function setCategory($category): void
    {
        $this->category = $category;
    }

    public function getDrivingExperience()
    {
        return $this->drivingExperience;
    }

    public function getCategory()
    {
        return $this->category;
    }
}