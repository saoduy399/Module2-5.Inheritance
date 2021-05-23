<?php
include_once "Calculate.php";

class Square extends Shape01 implements calculate
{
    protected $slide;

    public function __construct($slide){
        $this->slide=$slide;
    }

    public function getArea()
    {
        return $this->slide * 4;
    }

    public function getPerimeter()
    {
        return $this->slide *$this->slide;
    }

    public function getvolume()
    {
        return $this->slide * 2;
    }
}