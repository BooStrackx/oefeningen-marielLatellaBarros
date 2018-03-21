<?php
require_once 'ImmutablePoint.php';

$point1=new ImmutablePoint(1,2);
$point2=$point1;
print($point1);
print($point2);

$point1=$point1->changeX(12);
print($point1);
print($point2);