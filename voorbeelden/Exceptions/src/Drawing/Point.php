<?php namespace Drawing;

class Point
{
    private $x;
    private $y;
    const MAX_XY = 100;

    public function __construct($x, $y) {
        try {
            $this->setX($x);
        } catch (DrawingException $drawingException) {
            throw new DrawingException ("$x out of bounds" . " in __construct", 0, $drawingException);
        }

        try {
            $this->setY($y);
        } catch (DrawingException $drawingException) {
            throw new DrawingException ("$y out of bounds" . " in __construct", 0, $drawingException);
        }
    }

    public function setX($x)
    {
        if ($x < 0 || $x > self::MAX_XY) {
            throw new DrawingException("$x out of bounds" . " in setX");
        } else {
            $this->x = $x;
        }
    }

    public function setY($y)
    {
        if ($y < 0 || $y > self::MAX_XY) {
            throw new DrawingException("$y out of bounds" . " in setY");
        } else {
            $this->y = $y;
        }
    }



}