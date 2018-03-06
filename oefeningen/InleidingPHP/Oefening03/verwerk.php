<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verwerk</title>
</head>
<body>
<?php
$number = $_POST['number'];

//Function from PHP doesn't work! http://php.net/manual/en/function.gmp-fact.php
//$fact1 = gmp_fact(5); // 5 * 4 * 3 * 2 * 1
//echo gmp_strval($fact1) . "\n";


$factorial = calCulateFactorial($number);
echo "The factorial is: $factorial";//TODO: function returns 1.

function calCulateFactorial($input){
    $output = 1;
    if($input > 1){
        for($i = 2; $i <= $input; $i++){
            $output *= $i;
        }
    }
    return $output;
}

?>
</body>
</html>