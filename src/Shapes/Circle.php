<?php
namespace Shapes{
    class Circle extends Ellipse{
        public function __construct($radius){
            parent::__construct($radius, $radius);
        }
    }
}

