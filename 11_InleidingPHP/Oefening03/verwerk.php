<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verwerk</title>
</head>
<body>

<?php
require_once ('wiskunde.php');

$numberOutput = $_POST['numberInput'];

if (ctype_digit($numberOutput) && ($numberOutput > 0)) {
    $factorial = calCulateFactorial($numberOutput);
    echo "The factorial is: $factorial";
} else {
    echo "You entered a wrong input";
}

?>
</body>
</html>