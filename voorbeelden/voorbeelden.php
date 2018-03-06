<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Voorbeelden</title>
</head>
<body>

<ol>
    <li><h2>Inleiding</h2></li>
    <?php
    function greet($name){
    print ("Hello $name\n");
    }
    $who = 'Mariel';
    greet($who);
    ?>
    <li><h2>Variabelen</h2></li>
    <?php
    $a = 1;
    print ('a heeft waarde ' . $a . ' en type ' . gettype($a) . '<br/>');
    var_dump($a);

    $a = "tekst";
    print ('a heeft waarde ' . $a . ' en type ' . gettype($a) . '<br/>');
    var_dump($a);

    $a = TRUE;
    print ('a heeft waarde ' . $a . ' en type ' . gettype($a) . '<br/>');
    var_dump($a);
    ?>
    <li><h2>Cast-operaties</h2></li>
    <?php
    $a = "";
    print ("\$a is van het type " . gettype($a));
    var_dump($a);
    $b = (boolean)$a;
    if ($b) {
        print ("</br>waar <br/>");
    } else {
        print ("<br/>niet waar <br/>");
    }
    print ("\$b is van het type " . gettype($b));
    var_dump($b);
    ?>
    <li><h2>Operaties</h2></li>
    <p> In onderstaand voorbeeld verwijzen de variabelen $a en $c naar dezelfde locatie
        in het geheugen, wijzigingen in $c worden ook gemerkt in $a;</p>
    <?php
    $a = 1;
    $b = $a;
    $c = & $a;
    $b = 2;
    $c = 3;
    print ($a .' '. $b . ' ' . $c ."\n");
    ?>

    <p>Als bij de bewerkingen +, - en * een van de argumenten een float is (of een string die
        kan omgezet worden naar een double) dan worden beide beschouwd als float en is het
        resultaat een float. </p>
    <?php
    var_dump(1+"1.22aaaa");
    ?>

    <p>Bij een deling worden beide argumenten als float beschouwd en is het resultaat een float.
        Bij de modulo-bewerking worden de argumenten steeds als integer beschouwd en
        is het resultaat een integer.</p>

    <p>De belangrijkste tekst-operatie is de concatenatie (.) die twee strings aan elkaar verbindt.
        De argumenten links en rechts van deze operatie worden beide als string beschouwd en
        indien nodig naar string gecast. In onderstaand voorbeeld wordt true gecast naar “1” en
        false gecast naar “”. <strong>False</strong> is an empty string, so it doesn't appear!</p>
    <?php
    var_dump('-' . true . '-' . false . '-');
    var_dump('_'. false);
    ?>

    <p>Er wordt een onderscheid gemaakt tussen de vergelijkingen == en ===. <br>
        De operatie == controleert of twee waarden gelijk zijn, === controleert of twee waarden gelijk zijn en
        hetzelfde type hebben.</p>
        <?php
        echo  ("number and string are written the same way");
        var_dump(1=='1');
        echo  ("number and string are written the same way, but one is a number, and the other one a string");
        var_dump(1==='1');
        ?>

    <li><h2>Controle structuren</h2></li>
    <p>Op de details na zijn de controlestructuren (if, for, while, do while) vergelijkbaar met die in
        Java. </p>
    <?php
    $a=0;
    if ( $a< 1 ) {
        print("$a is kleiner dan 1\n");
    } else {
        print("$a is groter dan 1\n");
    }
    print("\n");

    echo("Option 1: ");
    while( $a< 10 ) {
        print($a);
        $a++;
    }
    print("\n");
    echo("Option 2: ");
    for ( $i = 0 ; $i < 10 ; $i++ ){
        print($i);
    }
    print("\n");
    ?>

    <li><h2>Arrays</h2></li>
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

    <p>Na de creatie van een array kunnen waarden (values) opgehaald en gewijzigd worden aan de hand van hun sleutels (keys). <br>
        Een waarde uit de rij wordt geselecteerd via vierkante haken: <strong>$rij[ key_i ] </strong>
        selecteert de value die overeenkomt met key_i.</p>

    <h3>Voorbeeld gebruik van keys</h3>
    <?php
    $a = array(1, 2, 3, 4);
    echo "$a[0]\n";
    $a[0] = "ja";
    var_dump($a);
    echo "\n";
    $b = array("een" => 1, "twee" => 3   );
    echo $b["een"] . "\n";
    echo "$b[een]\n";
    $b["twee"] = 2;
    var_dump($b);
    echo "\n";
    ?>

    <?php
    $a = array( 1, 2, 3, 4 );
    $a[7] = 11;
    var_dump( $a );
    echo "\n";
    $b = array( "een" => 1, "twee" => 3 );
    $b["drie"] = 3;
    var_dump( $b );
    echo "\n";
    ?>

    <p>Ook via lege vierkante haken kan een waarde toegevoegd worden: <strong>$rij [ ] = value_i;</strong><br>
    De waarde value_i wordt in de rij geplaatst met als key de eerstvolgende vrije index.
    In het volgend voorbeeld wordt de waarde nieuw toegevoegd met 1 als key (de key 0 was al ingenomen door de waarde 1).
    <?php
    $c = array( 1, "a" =>2 );
    $c[] ="nieuw";
    var_dump( $c );
    ?>

    <p>Elementen kunnen ook verwijderd worden uit de rij via de functie unset.</p>
    <?php
    $d = array( 1, "a" =>2, "b" );
    unset( $d["a"] );
    var_dump( $d );
    ?>

    <h3>Nuttige functies op een array:</h3>

    <table>
        <tr>
            <td>count($a)</td>
            <td>geef het aantal waarden in de rij $a</td>
        </tr>
        <tr>
            <td>array_keys($a)</td>
            <td>geef een rij met alle keys van $a</td>
        </tr>
        <tr>
            <td>array_keys($a, val)</td>
            <td>geef een rij met de keys die overeenkomen met de waarde val (zoekfunctie)</td>
        </tr>
        <tr>
            <td>array_values($a)</td>
            <td>geef een rij met alle values van $a</td>
        </tr>
        <tr>
            <td>sort($a)</td>
            <td>sorteer de rij $a</td>
        </tr>
        <tr>
            <td>shuffle($a)</td>
            <td>schud de rij $a</td>
        </tr>
        <tr>
            <td>min($a)</td>
            <td>minimum van de rij $a</td>
        </tr>
        <tr>
            <td>max($a)</td>
            <td>maximum van de rij $a</td>
        </tr>
    </table>

    <li><h2>For Each</h2></li>
    <p>foreach een handige structuur die gebruikt kan worden om door de waarden (en de sleutels) van een rij te gaan. <br>
        Via een eerste versie van de foreach-lus wordt elke waarde van de rij $rij in de variabele $v gekopieerd.</p><br>

        foreach( $rij as $v ) {<br>
        }<br>

    <?php
    $a = array(1 => "ma", 2 => "di", 3 => "wo", 4 => "ma");
    foreach ($a as $v) {
         echo "value: $v \n";
    }
    ?>


    <p>Via een tweede vorm van de foreach-lus is zowel de waarde ($v) als de sleutel ($k) van elk element uit de rij beschikbaar in de sequentie.<br>

        foreach ($rij as $k => $v) { <br>
     }<br>
     <?php
    $a = array(1 => "ma", 2 => "di", 3 => "wo", 4 => "ma");
    foreach ($a as $k=>$v) {
        echo "key: $k, value: $v \n";
    }
    ?>


    <li><h2>Functies</h2></li>
    <p>Een functie bevat een blok code die uitgevoerd wordt wanneer de functie aangeroepen wordt. <br>
        Bij het aanroepen kunnen argumenten meegegeven worden en er kan ook een waarde teruggeven worden via het keyword return.</p>
    <?php
    function som ( $getal1, $getal2 ) {
         return $getal1 + $getal2;
    }
    function printResultaat ( $resultaat ) {
         print ( $resultaat );
    }
    $resultaat = som ( 1 , 2 );
    printResultaat ( $resultaat );
    ?>

    <p>Elke naam kan slechts één keer gebruikt worden om een functie te definiëren.<br>
    Er zijn twee manieren hoe men deze beperking kan vermijden: de eerste methode bestaat erin een default argument voor de functie som te voorzien. <br>
    Een default waarde is een argument waarvan een waarde wordt voorzien. In het onderstaand voorbeeld heeft het argument $getal3 default waarde 0. <br>
        De functie kan worden aangeroepen met twee argumenten ($getal3 is dan gelijk aan 0), maar hij kan ook aangeroepen met drie argumenten.</p>
    <p>CODE HIER GEEF ERROR</p>
<!--    --><?php
//    function som ( $getal1, $getal2, $getal3 = 0 ) {
//             return $getal1 + $getal2 + $getal3;
//    }
//    $resultaat = som ( 1 , 2 );
//    print ( $resultaat );
//    $resultaat = som ( 1 , 2 , 3);
//    print ( $resultaat );

       function som2 ( $getal1, $getal2, $getal3 = 0 ) {
             return $getal1 + $getal2 + $getal3;
    }
    $resultaat = som ( 1 , 2 );
    print ( $resultaat );
    $resultaat = som ( 1 , 2 , 3);
    print ( $resultaat );

    ?>

    <p>Een tweede oplossing bestaat er in geen argument in te geven bij de declaratie en gebruik te maken van de functie func_get_args.<br>
        Er hoeft nu geen argument vermeld te worden bij de definitie van de functie. <br>
        De functie kan sowieso met eender welk aantal argumenten aangeroepen worden. <br>
        Deze argumenten worden opgevraagd en in een array geplaatst via de functie func_get_args.</p>

    <?php
    function som3 ( ) {
        $som=0;
        $argumenten=func_get_args();
        foreach ($argumenten as $argument) {
            $som += $argument;
        }
        return $som;
    }
    $resultaat = som ( 1 , 2 );
    print ( $resultaat );
    $resultaat = som ( 1 , 2 , 3, 7, 9);
    print ( $resultaat );
    ?>

    <p>Net zoals in Java kan ook de ‘splat’ - operator gebruikt worden</p>
    <?php
    function som4 ( ...$getallen ) {
        $som=0;
        foreach ( $getallen as $getal) {
             $som += $getal;
        }
        return $som;
    }
    $resultaat = som ( 1 , 2 );
    print ( $resultaat );
    $resultaat = som ( 1 , 2 , 3, 7, 9);
    print ( $resultaat );
    ?>

    <p>Sinds PHP5 kunnen argumenten getypehint worden: arrays en klassen kunnen als datatype bij argumenten vermeld worden:</p>
    <?php
    function printDatum ( DateTime $date ) {
        print ($date->format('Y-m-d H:i:s')) ;
    }
    function printRij ( array $rij){
        foreach ($rij as $element){
            print($element."\n");
        }
    }
    $date=new DateTime();
    printDatum($date);
    $rij=[1,2,3];
    printRij($rij);
    ?>

    <p>Vanaf PHP7 geldt dit ook voor de datatypes string, int, float, boolean. return-type vermeld worden bij de functie</p>
    <?php
    function som5 (int $getal1, int $getal2 ) : int {
        return $getal1 + $getal2;
    }
    $resultaat = som ( 1 , 2 );
    print ( $resultaat );
    ?>

    <li><h2>Voorgedefinieerde functies</h2></li>

    <h3>String functies</h3>
    <table>
        <tr>
            <td>strlen( $s )</td>
            <td>lengte van de string $s</td>
        </tr>
        <tr>
            <td> strpos ( $s, $z )</td>
            <td>eerste positie van een zoekstring $z in de string $s false als $z niet gevonden wordt</td>
        </tr>
        <tr>
            <td>substr( $s, $i )</td>
            <td>substring van de string $s, beginnende vanaf positie $i</td>
        </tr>
        <tr>
            <td> strtolower ( $s )</td>
            <td>geeft de string $s omgezet naar kleine letters terug</td>
        </tr>
        <tr>
            <td>strtoupper ( $s )</td>
            <td>geef de string $s omgezet naar hoofdletters</td>
        </tr>
        <tr>
            <td>trim( $s )</td>
            <td> geef de string $s zonder spaties voor en achteraan</td>
        </tr>
    </table>

    <h3>Functies voor variabelen</h3>

    <table>
        <tr>
            <td> define (“PI”, 3.1415 )</td>
            <td>definieer een constante</td>
        </tr>
        <tr>
            <td>unset ( $a )</td>
            <td> verwijder de variabele $a</td>
        </tr>
        <tr>
            <td>isset( $a )</td>
            <td>bestaat de variabele $a?</td>
        </tr>
        <tr>
            <td>is_bool( $a )</td>
            <td>is de variabele $a een boolean?</td>
        </tr>
        <tr>
            <td> is_double( $a )</td>
            <td>een double?</td>
        </tr>
        <tr>
            <td>is_string( $a )</td>
            <td>een string?</td>
        </tr>
        <tr>
            <td>get_type( $a )</td>
            <td>geef het type van het variabele $a</td>
        </tr>
    </table>


    <h3>Include en require</h3>
    <p>Via de functies include en require wordt een bestand geopend, de PHP-code in dit bestand wordt uitgevoerd en <br>
        het resultaat wordt geplaatst op de positie waar de functie aangeroepen werd. <br>
        Het verschil tussen include en require ligt in hoe fouten behandeld worden. <br>
        Indien het te openen bestand niet bestaat, geeft <strong>include</strong> een warning terwijl require een fatale error geeft. <br>
        include_once en require_once zijn vergelijkbaar met include en require. Enkel wordt er nu voor gezorgd dat elk bestand maar 1 keer ingevoegd wordt. <br>
        Via deze functies kunnen programma's opgesplitst worden in meerdere bestanden.</p>

    <?php
//    --math.php
    function som7 (int $getal1,int $getal2 ):int {
        return $getal1 + $getal2;
    }
    ?>

    <?php
//    --som.php
    require_once ( 'math.php' );
    $resultaat = som ( 1, 2 );
    print ( $resultaat ) ;
    ?>

    <h3>Header</h3>
    <p>Via de functie header kan de response header van de server gewijzigd worden. <br>
        Belangrijk is dat het aanroepen van de functie gebeurt voor output verstuurd wordt. De functie header wordt daarom meestal bovenaan in een PHP-bestand aangeroepen.<br>
        Header kan gebruikt worden om een header redirect te maken. <br>
        Onderstaande regel zorgt ervoor dat de browser doorverwezen wordt naar een andere pagina. <br>
        De opdracht exit() zorgt ervoor dat de rest van het huidige script niet uitgevoerd wordt.</p>

    <?php
    header( "Location: http://www.demorgen.be/" );
    exit();
    ?>

    <p>Via de functie header kan ook het MIME-type van de verstuurde inhoud bepaald worden. In onderstaand voorbeeld wordt een bestand als PDF verstuurd.</p>
    <?php
    $file = 'a.pdf';
    header('Content-type: application/pdf');
    header('Content-Disposition: attachment; filename="'. $file .'"');
    readfile($file);
    ?>

</ol>

</body>
</html>



