<?php
namespace SOLID\polymorphisme;

require_once '../../vendor/autoload.php';

$square = new Square(300);
$circle = new Circle(200);
echo ('Square area' . $square->calculateArea());
echo "\n";
echo ('Circle area' . $circle->calculateArea());
