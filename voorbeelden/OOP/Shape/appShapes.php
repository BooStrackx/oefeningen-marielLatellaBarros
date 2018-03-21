<?php
require_once '../PointSample/PointSample.php';
require_once 'Shape.php';
require_once 'Rectangle.php';
require_once 'Circle.php';
require_once 'Drawable.php';

//TODO: don't I need to "use"?

$point = new PointSample(1,2);
$rectangle = new Rectangle($point, 12,2);
print ($rectangle);
echo "<br/>";
echo "print method using the implicit toString from the object" . "<br/>";
$rectangle->draw();
echo "<br/>";
echo "print method using the interface method draw() that calls the toString() from the object. The result is the same." . "<br/>";
echo "<br/>";

$circle = new Circle($point, 12);
$circle->calculatePerimeter();
print ($circle);
echo "<br/>";
echo "print method using the implicit toString from the object" . "<br/>";
$circle->draw();
echo "<br/>";
echo "print method using the interface method draw() that calls the toString() from the object. The result is the same." . "<br/>";
