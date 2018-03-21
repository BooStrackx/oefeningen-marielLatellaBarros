<?php


final class Circle extends Shape
{
    private $radius;

    public function __construct(PointSample $point, $radius)
    {
        parent::__construct($point);
        $this->radius = $radius;
    }

    public function calculatePerimeter()
    {
        return 2 * $this->radius * M_PI;
    }

    public function __toString()
    {
        return "Circle: Point= " . parent::__toString() . " radius = " . $this->radius . " perimeter = " . $this->calculatePerimeter();
    }

    public function draw()
    {
        print $this->__toString();
    }
}