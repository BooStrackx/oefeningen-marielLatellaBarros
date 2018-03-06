<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>verwerking</title>
</head>
<body>
<?php
if (isset($_GET['naam'])) {
    print('Ingevoerde waarde voor naam:' . $_GET['naam']);
} else { ?>
<form action="ingave5.php" method="get">
    Naam:<input type="text" name="naam"/><br/>
    <input type="submit" name="submitNaam">
</form>
<?php } ?>
</body>
</html>