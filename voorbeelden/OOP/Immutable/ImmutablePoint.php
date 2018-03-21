<?php


class ImmutablePoint {

    private $x; private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function changeX($x){
        return new self($x,$this->y);
    }

    public function changeY($y){
        return new self($this->x,$y);
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    function __toString() {
        return "($this->x , $this->y) <br/>"; }
}