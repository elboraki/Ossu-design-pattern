<?php
namespace SOLID\OOP;

class Banana extends Fruit
{
    public function __construct()
    {

    }

    public function setSize($sizee)
    {
        $this->size = $sizee;
    }

    public function getSize(): string
    {
        return $this->size;
    }
}
