<?php
//header( "Location: http://www.demorgen.be/" );
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Functies</title>
</head>
<body>

<h1>Functies</h1>

<p>Bij het aanroepen kunnen argumenten meegegeven worden en er kan ook een waarde teruggeven worden via het keyword return.</p>

<?php
function som ( $getal1, $getal2 ) {
     return $getal1 + $getal2;
}
function printResultaat ( $resultaat ) {
     print ( $resultaat );
}
$resultaat = somFunctiesSample ( 1 , 2 );
printResultaat ( $resultaat );
?>

<p><strong>Elke naam</strong> kan slechts <strong>een keer gebruikt worden</strong> om een functie te definieren.<br/>
    Dit betekent dat er <strong>geen method overload</strong> bestaat in PHP.</p>

<p>Er zij 2 oplossingen:</p>

<h3>Default argumenten voorzienen in de declaratie van de functie</h3>
<pre>
    function somFunctiesSample ($getal1, $getal2, <strong>$getal3 = 0</strong> ) {
     return $getal1 + $getal2 + $getal3;
}
</pre>
<?php
function somFunctiesSample ($getal1, $getal2, $getal3 = 0 ) {
     return $getal1 + $getal2 + $getal3;
}
$resultaat = somFunctiesSample ( 1 , 2 );
print ( "The result of sum 1 + 2 + 0 is: " . $resultaat );
echo "<br/>";
$resultaat = somFunctiesSample ( 1 , 2 , 3);
print ( "The result of sum 1 + 2 + 3 is: " .$resultaat );
?>


<h3>Gebruik maken van de functie <strong>func_get_args</strong></h3>

<pre>
    function som ( ) {
    $som=0;
    <strong>$argumenten = func_get_args();
    foreach ($argumenten as $argument) {
        $som += $argument;</strong>
    }
    return $som;
</pre>
<?php
function somFunctiesSample2 ( ) {
    $som=0;
    $argumenten=func_get_args();
    foreach ($argumenten as $argument) {
        $som += $argument;
    }
    return $som;
}
$resultaat = somFunctiesSample2 ( 1 , 2 );
print ( "The result of sum 1 + 2 is: " .$resultaat );
echo "<br/>";
$resultaat = somFunctiesSample2 ( 1 , 2 , 3, 7, 9);
print ( "The result of sum 1 + 2 + 3+ 7 + 9 is: " .$resultaat );
?>




<h4>Net zoals in Java kan ook de splat (...) operator gebruikt worden:</h4>
<pre>
    function somFunctiesSampleJava <strong>(...$getallen )</strong> {
    $som=0;
    foreach ( $getallen as $getal) {
         $som += $getal;
    }
    return $som;
</pre>

<?php
function somFunctiesSampleJava (...$getallen ) {
    $som=0;
    foreach ( $getallen as $getal) {
         $som += $getal;
    }
    return $som;
}
$resultaat = somFunctiesSampleJava ( 1 , 2 );
print ( $resultaat );
$resultaat = somFunctiesSampleJava ( 1 , 2 , 3, 7, 9);
print ( $resultaat );
?>


<h4>Argumenten kunnen ook getypehint worden: arrays en klassen kunnen als datatype bij argumenten vermeld</h4>
<pre>
    function printDatum ( <strong>DateTime</strong> $date ) {
    print ($date->format('Y-m-d H:i:s')) ;
}
    function printRij ( <strong>array</strong> $rij){
    foreach ($rij as $element){
        print($element."<br/>");
    }
</pre>

<?php
function printDatum ( DateTime $date ) {
    print ($date->format('Y-m-d H:i:s')) ;
}
function printRij ( array $rij){
    foreach ($rij as $element){
        print($element."<br/>");
    }
}
$date=new DateTime();
printDatum($date);
$rij=[1,2,3];
printRij($rij);
?>



<h4>Vanaf PHP7 geldt dit ook voor de datatypes string, int, float, boolean.<br/>>
Ook kan een return type vermeld worden bij de functie.</h4>

<pre>
    function somFunctiesSampleReturnType (<strong>int</strong> $getal1, <strong>int</strong> $getal2 )<strong>: int </strong>  {
    return $getal1 + $getal2;
}
</pre>



<?php
function somFunctiesSampleReturnType (int $getal1, int $getal2 ) : int {
    return $getal1 + $getal2;
}
$resultaat = somFunctiesSampleReturnType ( 1 , 2 );
print ( $resultaat );
?>


<h4>Nuttige functies</h4>
<pre>
    <strong>String functies</strong>
    strlen( $s )        lengte van de string $s
    strpos ( $s, $z )   eerste positie van een zoekstring $z in de string $s false als $z niet gevonden wordt
    substr( $s, $i )    substring van de string $s, beginnende vanaf positie $i
    strtolower ( $s )   geeft de string $s omgezet naar kleine letters terug
    strtoupper ( $s )   geef de string $s omgezet naar hoofdletters
    trim( $s )          geef de string $s zonder spaties voor en achteraan


    <strong>Functies voor variabelen</strong>
    define (“PI”, 3.1415 )  definieer een constante
    unset ( $a )            verwijder variabele $a
    isset( $a )             bestaat de variabele $a?
    is_bool( $a )           is de variabele $a een boolean?
    is_double( $a )         idem...
    is_string( $a )         idem...
    ...
    get_type( $a )          geef het type van de variabele $a
</pre>



<h3>Include en require => in Java "import..."</h3>
<p>Het verschil tussen de twee ligt in hoe fouten behandeld worden. <br/>
    Include geeft een <strong>warning</strong> terwijl require een <strong>fatale error </strong> geeft.</p>
<p>Via deze functies kunen programma's opgesplitst worden in meerdere bestanden.</p>

<pre>
    math.php
    < ?php
        function som (int $getal1,int $getal2 ):int {
            return $getal1 + $getal2;
        }
    ?>

    som.php
    < ?php
        <strong>require_once ( 'math.php' );</strong>
        $resultaat = som ( 1, 2 );
        print ( $resultaat ) ; => 3
    ?>
</pre>

<?php
function somFunctiesIncludeRequire (int $getal1, int $getal2 ):int {
return $getal1 + $getal2;
}

require_once ( 'math.php' );
$resultaat = somMath ( 1, 2 );
print ( $resultaat ) ;
?>

<h3>Header</h3>
<p>Via de functie <strong>header</strong> kan de response header van de server gewijzigd worden.<br/>
Het aanroepen van de functie gebeurt <strong>voor output verstuurd wordt</strong>.<br/>
De functie header wordt daarom meestal bovenaan in een PHP-bestand aangeroepen.</p>

<p>Header kan gebruikt worden om een header redirect te maken.<br/>
Hier wordt de browser doorverwezen naar een andere pagina.<br/>
De opdracht <strong>exit()</strong> zorgt ervoor dat de rest van het huidige script niet uitgevoerd wordt.</p>

<pre>
    < ?php
    header( "Location: http://www.demorgen.be/" );
    exit();
    ?>
</pre>

<p>Via de header kan ook het MIME-type van de verstuurde inhoud bepaald worden.<br/>
Hier wordt een bestand als PDF verstuurd:</p>

<pre>
    < ?php
    $file = 'PHP.pdf';
    header('Content-type: application/pdf');
    header('Content-Disposition: attachment; filename="'. $file .'"');
    readfile($file);
    ?>
</pre>
</body>
</html>