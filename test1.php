<?php
require './src/Shapes/Shape.php';
require './src/Shapes/Rectangle.php';
require './src/Shapes/Square.php';
require './src/Shapes/Ellipse.php';
require './src/Shapes/Circle.php';

function printSquare(\Shapes\Shape $shape){
    echo get_class($shape), " square: ", $shape->getSquare(), "\n";
}

$shapes = new SplObjectStorage();
$shapes->attach(new \Shapes\Ellipse(10, 3));
$shapes->attach(new \Shapes\Circle(5));
$shapes->attach(new \Shapes\Rectangle(10, 20));
$square = new \Shapes\Square(5);
$shapes->attach(clone $square);
$shapes->attach(clone $square);
$shapes->attach(clone $square);
$shapes->attach(clone $square);

foreach($shapes as $shape){
    printSquare($shape);
}
