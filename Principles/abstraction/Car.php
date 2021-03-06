<?php
namespace SOLID\abstraction;

abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro(): string;
}
