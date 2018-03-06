<?php
final class Point
{
    private $x;

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }
    private $y;

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    function __toString()
    {
        return "($this->x , $this->y)";
    }
    public function calculateDistance(Point $point)
    {
        return sqrt( ($this->x-$point->x)*($this->x-$point->x)+
            ($this->y-$point->y)*($this->y-$point->y) );
    }
}