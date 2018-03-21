<?php

final class PointSample {

    private $x; private $y;
    const MAXIMUM_XY = 100;

    public function __construct($x, $y) {
        $this->setX($x);
        $this->setY($y);

    }
    //TODO: check how magic method works in constructor
//    //magic method
//    public function __set($property, $value)
//    {
//        if (property_exists($this, $property)) {
//            $this->$property = $value;
//        } else{
//            throw new Exception("unknown field: $property");
//        }
//    }
//
//    //magic method
//    public function __get($property)
//    {
//        if (property_exists($this, $property)) {
//            $this->$property = $property;
//        } else{
//            throw new Exception("unknown field: $property");
//        }
//    }

    public function getX()
    {
        return $this->x;
    }

    // remove ": void"
    public function setX($x)
    {
        if ($x >= 0 && $x <= self::MAXIMUM_XY) {
            $this->x = $x;
        } else {
            $this->x = self::MAXIMUM_XY;
        }
    }

    public function getY()
    {
        return $this->y;
    }

    // remove ": void"
    public function setY($y)
    {
        if ($y >= 0 && $y <= self::MAXIMUM_XY) {
            $this->y = $y;
        } else {
            $this->y = self::MAXIMUM_XY;
        }
    }

    function __toString() {
        return "($this->x , $this->y)";
    }

    public function calculateDistance(PointSample $point) {
        return sqrt(($this->x-$point->x)*($this->x-$point->x) +
                         ($this->y-$point->y)*($this->y-$point->y)
                    );
    }
}