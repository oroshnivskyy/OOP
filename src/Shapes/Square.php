<?php

class Square extends Rectangle{
    public function __construct($sideLength){
        parent::__construct($sideLength, $sideLength);
    }
}