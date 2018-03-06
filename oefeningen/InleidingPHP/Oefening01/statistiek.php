<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Statistiek</title>
</head>
<body>
<?php
$arrayInput = $_POST['input'];

foreach($arrayInput as $value) {
    echo "value  = $value";
    echo "<br>";
}

echo "<br>";

foreach($arrayInput as $key => $value) {
    echo "index= $key,  value = $value";
    echo "<br>";
}

echo "<br>";

//Calculate the average, max and min values
$average = array_sum($arrayInput) / count($arrayInput);
$averageRounded = ceil($average);
$max = max($arrayInput);
$min = min($arrayInput);

echo "Het gemiddelde is: $average";
echo "<br>";
echo "Het gemiddelde (rounded) is: $averageRounded";
echo "<br>";

echo "De hoogste nummer is: $max";
echo "<br>";

echo "De laagste nummer is: $min";
echo "<br>";

echo "<br>";

$sum = 0;
$count = 0;
$errorInput = '';
$max = -10000000;
foreach($arrayInput as $value) {
    if (is_numeric($value)) {
        $sum = $sum + $value;
        $count++;
        if($value > $max){
            $max = $value;
        }
    } else {
        $errorInput = $errorInput . "<br>" . $value;
    }
    echo "<br>";
}
echo "De MANUAL som is: $sum";
echo "<br>";

$averageManual = $sum / $count;
echo "De MANUAL average is: $averageManual";
echo "<br>";
$averageManualRounded = ceil($averageManual);
echo "De MANUAL average (rounded) is: $averageManualRounded";
echo "<br>";

echo "De max number (MANUAL) is: $max";
echo "<br>";


echo "Errors: $errorInput";
echo "<br>";



?>
</body>
</html>