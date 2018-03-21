<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Casting</title>
</head>
<body>
<h1>Cast operaties</h1>

<p>Het is mogelijk omzettingen tussen verschillende types te maken via cast-operaties.<br>
Check course for more info.</p>

<?php
$a = "";
print ("\$a is van het type " . gettype($a));
var_dump($a);

$b = (boolean) $a;
if ($b) {
    print ("</br>waar<br/>");
} else {
    print ("</br>niet waar<br/>");
}
print ("\$b is van het type " . gettype($b));
var_dump($b);

?>
</body>
</html>