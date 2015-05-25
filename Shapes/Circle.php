<?php
class Circle extends Ellipse{
    public function __construct($radius){
        return parent::__construct($radius, $radius);
    }
}