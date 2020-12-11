<?php

use SOLID\OOP\Banana;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
$f = new Banana();

$f->setSize('12cm');
var_dump($f->getSize());
