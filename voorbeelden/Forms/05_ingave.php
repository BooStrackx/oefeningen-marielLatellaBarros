<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>is set</title>
</head>
<body>

<h1>If there is data in the variable, then do stuff (continue)... Otherwise... (show form to fill in data), in the same pagina</h1>
<?php
if (isset($_GET['naam'])) {
    print('Ingevoerde waarde voor naam:' . $_GET['naam']);
} else { ?>
<form action="05_ingave.php" method="get">
    Naam:<input type="text" name="naam"/><br/>
    <input type="submit" name="submitNaam">
</form>
<?php } ?>
</body>
</html>