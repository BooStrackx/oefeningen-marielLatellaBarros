<?php

final class Rectangle extends Shape
{
    private $width, $height;

    public function __construct(PointSample $point, $width, $height)
{
    parent::__construct($point);
    $this->width = $width;
    $this->height = $height;
}

    public function calculatePerimeter()
    {
       return (2 * $this->width) + (2 * $this->height);
    }

    public function __toString()
    {
        return "Rectangle: Point= " . parent::__toString() . " width= " . $this->width . " height = " . $this->height;
    }

    public function draw()
    {
        print ($this->__toString());
    }
}