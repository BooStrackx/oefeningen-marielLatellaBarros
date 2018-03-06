<?php
$name = $_POST['name'];
$color = $_POST['color'];

setcookie ('name', $name,time() + 24 * 60 *60 );
setcookie ('color', $color,time() + 24 * 60 *60 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verwerking Oef02</title>
</head>
<body>

<?php

echo "Name is: $name";
echo "Color is: $color";

?>


</body>
</html>