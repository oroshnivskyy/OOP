<?php
include './Shapes/Shape.php';
include './Shapes/Rectangle.php';
include './Shapes/Square.php';
include './Shapes/Ellipse.php';
include './Shapes/Circle.php';

function printSquare(Shape $shape){
    echo get_class($shape), " square: ", $shape->getSquare(), "\n";
}

$shapes = new SplObjectStorage();
$shapes->attach(new Ellipse(10, 3));
$shapes->attach(new Circle(5));
$shapes->attach(new Rectangle(10, 20));
$shapes->attach(new Square(5));

foreach($shapes as $shape){
    printSquare($shape);
}
