<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hidden input</title>
</head>
<body>
De ingegeven waarde voor naam is
<?php print($_GET['naam']);?>.
<form action="04_verwerking.php" method="get">
    <input type="hidden" name="naam" value="<?php print($_GET['naam']);?>"/>
    <input type="submit" value="bevestig" />
</form>
<a href="04_ingave.html">terug</a>
</body>
</html>