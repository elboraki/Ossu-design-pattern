<?php
namespace SOLID\composition;

class Car
{

    private $model;

    private $engine;
    public function __construct($model)
    {
        $this->engine = new Engine('model101');
        $this->model = $model;
    }
}
