<?php
namespace Shapes;
class Rectangle implements Shape{

    protected $width;
    protected $height;

    public static function getInstance($width, $height){
        return new self($width, $height);
    }
    
    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getSquare(){
        return $this->width * $this->height;
    }

    public function getData(){
        return array('width'=>$this->width, 'height'=>$this->height);
    }
}