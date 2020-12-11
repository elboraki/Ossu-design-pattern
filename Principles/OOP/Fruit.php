<?php
namespace SOLID\OOP;

abstract class Fruit
{
    // Properties

    protected $size;

    protected $color;

    abstract public function setSize($sizee);

    abstract public function getSize(): string;

}
