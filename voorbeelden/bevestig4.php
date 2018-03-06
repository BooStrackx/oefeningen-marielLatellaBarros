<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bevestig</title>
</head>
<body>
De ingegeven waarde voor naam is
<?php print($_GET['naam']);?>.
<form action="verwerking4.php" method="get">
    <input type="hidden" name="naam"
           value="<?php print($_GET['naam']);?>"/>
    <input type="submit" value="bevestig" />
</form>
<a href="ingave4.html">terug</a>
</body>
</html>