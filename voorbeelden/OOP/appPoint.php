<?php
require_once 'PointSample.php';

echo "<h1>appPoint: create 2 Point objects and calculate the distance between them</h1>";

$point1=new PointSample(1,2);
print($point1);
echo "<br/>";


$point2=new PointSample(5,11);
print($point2);
echo "<br/>";

$distance=$point1->calculateDistance($point2);
print($distance);
echo "<br/>";

print ("Amount of points: " . PointSample::getCountInitialisations());
echo "<br/>";
unset($point2);
print ("Amount of points after deleting point2: " . PointSample::getCountInitialisations());
