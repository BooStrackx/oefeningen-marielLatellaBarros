<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For Each</title>
</head>
<body>

<h1>Foreach</h1>

<p>Een handige structuur om door de waarden (en de sleutels) van een array te gaan.</p>

<h2>Foreach: values</h2>

<pre>
    foreach( $rij as $v ) {
}
</pre>

<p>"For each element of the array as value..."</p>
<?php
$a = array(1 => "ma", 2 => "di", 3 => "wo", 4 => "ma");
foreach ($a as $v) {
     echo "value: $v" . "<br/>";
}
?>

<h2>Foreach: key => value</h2>

<pre>
    foreach ($rij as $k => $v) {
     }
</pre>

<p>"For each element of the array as key => value..."</p>
<?php
$a = array(1 => "ma", 2 => "di", 3 => "wo", "cuatro" => "do");
foreach ($a as $k=>$v) {
     echo "key: $k,  value: $v" . "<br/>";
}
?>


</body>
</html>