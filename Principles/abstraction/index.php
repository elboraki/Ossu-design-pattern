<?php
namespace SOLID\abstraction;

require_once '../../vendor/autoload.php';

$a = new Audi('audi');
echo ($a->intro());
