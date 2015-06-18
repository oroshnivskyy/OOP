<?php
namespace Shapes;
class Ellipse implements Shape{
    protected $majorRadius;
    protected $minorRadius;

    public function __construct($majorRadius, $minorRadius){
        $this->majorRadius = $majorRadius;
        $this->minorRadius = $minorRadius;
    }
    public function getSquare(){
        return pi()*$this->majorRadius * $this->minorRadius;
    }
}