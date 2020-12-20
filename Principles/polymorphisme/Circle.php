<?php

namespace SOLID\polymorphisme;

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea(): int
    {
        return ($this->radius * $this->radius * pi());
    }
}
