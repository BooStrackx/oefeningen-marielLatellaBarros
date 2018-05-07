
<?php
$numberChosen = $_POST['numberChosen'];

if (ctype_digit($numberChosen) && ($numberChosen > 0)) {

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
    header( "Location: ingave.html" );
    exit();
}
