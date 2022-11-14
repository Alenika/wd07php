<?php

namespace App\Worker;

class Student extends User
{
    private $scholarship;
    private $course;

    public function setScholarship($scholarship) {
        $this-> scholarship= $scholarship;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function getScholarship() {
        return $this->scholarship;
    }

    public function getCourse() {
        return $this->course;
    }
}