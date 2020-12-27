<?php
namespace SOLID\factoryPattern;

require_once '../../vendor/autoload.php';
$pizeria = new Pizzeria();
$pf = $pizeria->orderPizza('fromage');
$pfm = $pizeria->orderPizza('fruit mer');
var_dump($pf->pack());
var_dump($pfm->prepare());
var_dump($pfm->bake());
