<?php

class Square extends Rectangle{
    public function __construct($sideLength){
        return parent::__construct($sideLength, $sideLength);
    }
}