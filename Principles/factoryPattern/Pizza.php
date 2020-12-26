<?php
namespace SOLID\factoryPattern;

abstract class Pizza
{
    abstract public function prepare(): string;
    abstract public function bake(): string;
    abstract public function cut(): string;
    abstract public function pack(): string;

}
