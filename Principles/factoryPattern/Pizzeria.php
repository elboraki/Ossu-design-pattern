<?php

namespace SOLID\factoryPattern;

use SOLID\factoryPattern\FactoryCasa;

class Pizzeria
{

    public function __construct()
    {

    }

    public function orderPizza($type)
    {
        $factroy = new FactoryCasa();
        $pizza = $factroy->createPizza($type);
        return $pizza;
    }
}
