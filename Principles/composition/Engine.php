<?php

namespace SOLID\composition;

class Engine
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

}
