<?php
require_once 'src/Util/Date.php';

$day = $_POST['dayInput'];
$month = $_POST['monthInput'];
$year = $_POST['yearInput'];

$date = new Date($day, $month, $year);

$date->print();
$date->printMonth();
