<?php
namespace SOLID\factoryPattern;

class PizzaFormage extends Pizza
{

    public function __construct()
    {

    }

    public function prepare(): string
    {
        return "Prepare Pizza with Fromage";
    }

    public function bake(): string
    {
        return "bake Pizza with Fromage";
    }

    public function cut(): string
    {
        return "cut Pizza with Fromage";
    }

    public function pack(): string
    {
        return "pack Pizza with Fromage";
    }
}
