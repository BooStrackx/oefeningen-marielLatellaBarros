<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toon naam en achtergrond</title>
</head>

<body style = "background-color:<?php echo $_COOKIE['color']?>">

<?php
foreach($_COOKIE as $key => $value){
    print( $key. ' : '. $value  );
    echo "<br>";
}

echo "<br>";

print ( $_COOKIE['name'] );
echo "<br>";
print ( $_COOKIE['color'] );
?>

</body>
</html>