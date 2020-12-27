<?php

namespace SOLID\factoryPattern;

use SOLID\factoryPattern\PizzaFromage;

class FactoryCasa implements PizzaFactory
{

    public function createPizza($type)
    {
        if ($type === "fromage") {
            return $p = new PizzaFromage();
        } else if ($type === "fruit mer") {
            return $p = new PizzaFruitMer();
        } else {
            return null;
        }
    }
}
