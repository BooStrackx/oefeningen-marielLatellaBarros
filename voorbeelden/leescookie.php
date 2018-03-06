<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>leescookie</title>
</head>
<body>

<p>De waarden van een cookie kunnen gelezen worden via de rij $_COOKIE. In leescookies worden alle key value paren afgedrukt. <br>
    Enkel de waarde voor taal afdrukken kan natuurlijk ook via de regel print ( $_COOKIE[‘taal’] ); . <br>
    Zoals getoond in de onderstaande screenshot stuurt de browser in de request alle cookies mee naar de server.</p>
<?php
foreach($_COOKIE as $key => $value){
    print( $key. ' : '. $value  );
}
?>
</body>
</html>