<?php

print  $_COOKIE['name'];
echo "<br>";
print  $_COOKIE['color'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toon naam en achtergrond</title>
    <style>
        body {
        background-color:<?php echo $_COOKIE['color']?>;
        }
    </style>
</head>

<body>

</body>
</html>