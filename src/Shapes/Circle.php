<?php
class Circle extends Ellipse{
    private function __construct($radius){
        parent::__construct($radius, $radius);
    }
}