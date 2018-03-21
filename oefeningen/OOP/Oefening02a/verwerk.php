<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>verwerk</title>
</head>
<body>
<?php
require_once 'vendor/autoload.php';
use Util\Date;

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$date = new Date($day, $month, $year);

$date->print();
$date->printMonth();

?>
</body>
</html>