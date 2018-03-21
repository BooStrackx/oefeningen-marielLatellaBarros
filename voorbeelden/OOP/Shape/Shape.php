<?php
require_once 'Drawable.php';

abstract class Shape implements Drawable
{
    private $point;

    public function __construct(PointSample $point)
    {
        $this->point = $point;
    }

    function __toString()
    {
        return $this->point->__toString();
    }

    public abstract function calculatePerimeter();
}