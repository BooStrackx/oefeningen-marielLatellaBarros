<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>

<h1>Arrays</h1>

<p>In PHP is een array een datatype waarin een aantal waarden (values) bewaard kunnen worden.<br/>
    Bij elke waarde in de array is er een sleutel (key) voorzien waarmee de waarde opgevraagd kan woorden. <br/>
    In veel programeertalen wordt deze datastructuur een MAP genoemd.</p>

<p>De waarden (values) in een array hoeven niet allemaal van hetzelfde type te zijn.<br/>
    De sleutel (key) moet van het datatype onteger of string te zijn.<br/>
    Als er geen key gespecificieerd wordt bij het aanroepen van de functie array dan wordt
    de eerstvolgende beschikbare integer genoemd als key.</p>


<pre>
    Een array kan aangemaakt worden via de functie array:
    $a = array(element_1, element_2, ... ,element_N);
    waarbij
    element_i = value_i
    element_i = key_i => value_i
</pre>

<?php
$a = array(1, 2, 3, 4);
$b = array(1, 2.1, true, "ja");
$c = array(1 => 12, "Juist" => true);
$d = array (2 => 1, 10);
echo '<table border ="1">';
echo '<tr><td>$a = array(1,2,3,4);</td><td> ';
var_dump($a);
echo '</td></tr>';
echo '<tr><td>$b = array(1,2.1,true,"ja");</td><td> ';
var_dump($b);
echo '</td></tr>';
echo '<tr><td>$c = array(1=> 12, "Juist" => true);</td><td> ';
var_dump($c);
echo '</td></tr>';
echo '<tr><td>$d = array (2 => 1, 10);</td><td> ';
var_dump($d);
echo '</td></tr>';
echo '</table>';
?>

<h2>Arrays wijzen een values selecteren</h2>
<p>Na de creatie van een array kunnen waarden (values) opgehaald en gewijzigd worden aan de hand van hun sleutels (keys). <br/>
    Een waarde uit de array wordt geselecteerd via vierkante haken:<br/>

<pre>
    $rij[ key_i ]
    selecteert de value die overeenkomt met key_i.
</pre>
    </p>

<?php
$a = array(1, 2, 3, 4);
var_dump($a);
echo "Value at index 0 is: $a[0]";
echo "<br/>";

$a[0] = "ja";
var_dump($a);
echo "After changing value in 'a' from 0 to 'ja', the value at index 0 is: $a[0]";
echo "<br/>";


$b = array("een" => 1, "twee" => 3   );
echo "Value at index 'een' is: " .  $b["een"] . "<br/>";
echo "$b[een]\n";
$b["twee"] = 2;
var_dump($b);
echo "<br/>";
?>

<p>Na de creatie van de array kunnen er nog steeds elementen bij de array toegevoegd worden.</p>

<?php
$a = array( 1, 2, 3, 4 );
$a[7] = 11;
var_dump( $a );
echo "<br/>";
$b = array( "een" => 1, "twee" => 3 );
$b["drie"] = 3;
var_dump( $b );
echo "<br/>";
?>

<p>Ook via lege vierkante haken kan een waarde toegevoedg worden.<br/>

De waarde 'value_i' wordt in de array geplaatst met als key de eerstvolgende vrije index.</p>

<pre>
    $array [ ] = value_i;
</pre>

<?php
$c = array( 1, "a" =>2 );
$c[] ="nieuw";
var_dump( $c );
?>

<h2>Elementen uit een array verwijderen</h2>
<p>Elementen kunnen ook verwijderd worden uit de rij via de functie <bold>unset</bold>.</p>

<?php
$d = array( 1, "a" =>2, "b" );
var_dump( $d );
unset( $d["a"] );
var_dump( $d );
?>

<h2>Nuttige functies</h2>

<pre>
    count($a)            aantal waarden in de array $a
    array_keys($a)       geef een array met alle keys van $a
    array_keys($a, val)  geef een array met alle keys die overeenkomen met de waarde 'val' (zoekfunctie)
    array_values($a)     geef een array met alle values van $a
    sort($a)             sorteer de array $a
    shuffle($a)          schud de array $a
    min($a)              minimum van de array $a
    max($a)              maximum van de array $a
</pre>


</body>
</html>