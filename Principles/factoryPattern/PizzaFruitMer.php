<?php
namespace SOLID\factoryPattern;

class PizzaFruitMer extends Pizza
{

    public function __construct()
    {

    }

    public function prepare(): string
    {
        return "Prepare Pizza with FruitMer";
    }

    public function bake(): string
    {
        return "bake Pizza with FruitMer";
    }

    public function cut(): string
    {
        return "cut Pizza with FruitMer";
    }

    public function pack(): string
    {
        return "pack Pizza with FruitMer";
    }
}
