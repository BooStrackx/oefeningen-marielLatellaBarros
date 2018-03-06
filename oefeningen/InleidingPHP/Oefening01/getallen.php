<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Getallen</title>
</head>
<body>

<?php
$numberChosen = $_POST['numberChosen'];
if (ctype_digit($numberChosen)) {

    if ($numberChosen > 0) {

        echo "Number bigger than zero.";
        echo "<br>";

        echo "<form action=\"statistiek.php\" method=\"post\">";
        $i = 1;
        while ($i <= $numberChosen) {
            echo "<input type='text' name='input[]' size='50px' />";
            echo "<br>";
            $i++;
        }
        echo "<input type=\"submit\">";
        echo "</form>";
    } else {
        echo "Number smaller than zero." . "\n";

        header( "Location: ingave.html" );
        exit();
    }

} else {
    header( "Location: ingave.html" );
    exit();

}
?>


</body>
</html>