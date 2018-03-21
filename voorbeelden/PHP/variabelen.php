<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variabelen</title>
</head>
<body>

<h1>Variabelen</h1>

<p>In PHP wordt een variabele aangeduid door een dollarteken ($). Variabelen zijn case-sensitive.<br/>
Het datatype char bestaat niet. <br/>
Bij single quotes wordt de inhoud letterlijk overgenomen.<br>
Bij double quotes worden variabelen en worden geëscape'te symbolen zoals \n geëxpandeerd.</p>
<?php
$a = 1;
print ('a heeft waarde ' . $a . ' en type ' . gettype($a) . '<br/>');
var_dump($a);

$a = "text";
print ('a heeft waarde ' . $a . ' en type ' . gettype($a) . '<br/>');
var_dump($a);

$a = true;
print ('a heeft waarde ' . $a . ' en type ' . gettype($a) . '<br/>');
var_dump($a);

?>
</body>
</html>