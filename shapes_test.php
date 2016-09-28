<?php

require_once "rectangle.php";

require_once "square.php";


$rectangle = new Rectangle('5','5');
echo $rectangle->area() . PHP_EOL;
echo $rectangle->perimeter() . PHP_EOL;


$square = new Square('6');
echo $square->area() . PHP_EOL;
echo $square->perimeter() . PHP_EOL;
