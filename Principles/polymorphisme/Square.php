<?php

namespace SOLID\polymorphisme;

class Square implements Shape
{
    private $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function calculateArea(): int
    {
        return ($this->width * $this->width);
    }
}
