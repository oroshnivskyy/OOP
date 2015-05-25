<?php

class Rectangle implements Shape{

    protected $width;
    protected $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getSquare(){
        return $this->width * $this->height;
    }
}