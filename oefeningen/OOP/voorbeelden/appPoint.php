<?php
require_once 'Point.php';
$point1=new Point(1,2);
print($point1);
echo $point1->getX();
echo $point1->getY();
//echo $point1->setX();
//echo $point1->setY();
$point2=new Point(5,11);
print($point2);
echo $point2->getX();
echo $point2->getY();
//echo $point2->setX();
//echo $point2->setY();

$distance=$point1->calculateDistance($point2);

print($distance);


