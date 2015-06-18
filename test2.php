<?php
include "own_autoloader.php";
use Shapes\Ellipse;
use Shapes\Circle;
function printSquare(\Shapes\Shape $shape){
    echo get_class($shape), " square: ", $shape->getSquare(), "\n";
}

$shapes = new SplObjectStorage();
$shapes->attach(new Ellipse(10, 3));
$shapes->attach(new Circle(5));
$shapes->attach(new Shapes\Rectangle(10, 20));
$square = new Shapes\Square(5);
$shapes->attach(clone $square);
$shapes->attach(clone $square);
$shapes->attach(clone $square);
$shapes->attach(clone $square);

foreach($shapes as $shape){
    printSquare($shape);
}