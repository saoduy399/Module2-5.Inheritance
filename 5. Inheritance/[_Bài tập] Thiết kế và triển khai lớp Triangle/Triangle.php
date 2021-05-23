<?php


class Triangle extends Shape01
{

    protected $slide1;
    protected $slide2;
    protected $slide3;

    public function __construct($slide1, $slide2, $slide3)
    {
        $this->slide1=$slide1;
        $this->slide2=$slide2;
        $this->slide3=$slide3;
    }

    public function getArea()
    {
        return $this->slide1 + $this->slide2 + $this->slide3;
    }

    public function getPerimeter()
    {
       return 1/4 * sqrt(($this->slide1 + $this->slide2 + $this->slide3) * ($this->slide1 + $this->slide2 - $this->slide3) * ($this->slide2 + $this->slide3 - $this->slide1) * ($this->slide3 + $this->slide1 - $this->slide2));
    }
}