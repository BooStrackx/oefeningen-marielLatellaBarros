<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Errors Intro</title>
</head>
<body>
<h1>Errors Intro</h1>

<p>Errors kunnen niet behandeld worden in een try-catch block.</p>
<p>De functie fopen genereert een "error" van type E_WARNING:</p>

<?php
$f=fopen('ikbestaniet.txt', 'r+');
?>

<p>In het configuratiebestand php.ini wordt geconfigureerd welke errors getoond moeten worden.</p>
<pre>
    /etc/php/7.0/cli/php.ini

    ...
; E_ALL & ~E_NOTICE & ~E_STRICT (Show all errors, except for notices and coding standards warnings.)
...
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT
</pre>

<p>Dit gedrag kan overschreven worden via error_reporting()</p>

<?php error_reporting(E_ALL);
print($ikBestaNiet);
echo "<br/>";
?>

<p>Met @</p>
<?php error_reporting(E_ALL);
//TODO: @print... doesn't work!
print($ikBestaNiet);
echo "<br/>";
?>

</body>
</html>