
<?php
$numberChosenOutput = $_POST['input'];

$average = 0;
$highest = 0;
$lowest = 0;
$numbers = [];
$notNumbers = [];
$sum = 0;

 foreach($numberChosenOutput as $value) {
 	if (is_numeric($value)) {
 		$numbers[] = $value;
 		$sum += $value;
 	} else {
 		$notNumbers[] = $value;
 	}
 }

 $average = $sum / count($numbers);
 $highest = max($numbers);
 $lowest = min($numbers);


echo "Het gemmiddelde is: " . $average;
echo "<br>";
echo "De hoogste waarde is : " . $highest;
echo "<br>";
echo "De laagste waarde is : " . $lowest;
echo "<br>";
echo "Misse waarden: ";
echo "<br>";
foreach ($notNumbers as $value) {
	echo $value;
	echo "<br>";
}
