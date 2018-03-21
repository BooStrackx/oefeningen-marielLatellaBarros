<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>

<h1>Inleiding</h1>
<p>PHP is een serverside scripttaal gebruikt om dynamische webpagina's te maken.<br/>
PHP is een flexibel programmeertaal waar variabelen niet gedeclareerd moeten woorden.<br/>
De broncode die op de server staat is: /var/www/html</p>
<?php
$name1 = 'Mariel';
$name2 = "Ben";
echo "NOTE: ";
echo ' "\n" works only for plain text (execution from terminal). If code is rendered in HTML, then you need to use "\< br />" ' ;
echo "<br />";
echo "These lines of text are processed in the server and rendered as HTML:";
echo "<br />";

print( "Hello $name1 <br />");
print( "Hello $name2 <br />");
?>

<h2>Chrome settings</h2>
<p>By using Inspect/ Network/ Headers you can see the communication between client to server and server to client. <br/>
The client sends a request (GET /hello.php HTTP/1.1) and the server sends an answer back (HTTP/1.1 200 OK) with the code.</p>
</body>
</html>