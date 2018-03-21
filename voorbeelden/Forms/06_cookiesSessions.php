<?php
setcookie ('taal', 'NL',time() + 24 * 60 *60 );
session_start();
$_SESSION['name'] = "Thomas";
?>
<!DOCTYPE html>
<html lang="en">
<body>
<h1>Cookies en sessions</h1>

<h2>Cookies</h2>
<p>Cookies bevatten <strong>gegevens die door de server naar de browser gestuurd worden</strong>, waar ze bewaard worden voor later gebruik.</p>

<p>Bij cookies worden alle gegevens bewaard bij de client. <br/>
    Een cookie wordt geplaatst via het commando</p><br>

<p>Het aanroepen van <strong>setcookie</strong> moet altijd gebeuren <strong>in het begin van een script</strong>,
    voor er gegevens naar de client verstuurd worden.</p>

<pre>
    setcookie (’taal’, ’NL’,time() + 24 * 60 *60 );
</pre>

<p>Check cookies => Inspect Chrome/ Network/ (pagina name)/ Headers/ Response Headers => Set-Cookie. Bv: </p>

<pre>
    Set-Cookie: taal=NL; expires=Wed, 21-Mar-2018 15:30:02 GMT; Max-Age=86400
</pre>

<?php
echo "Cookies placed:" . "<br/>";
if (isset($_COOKIE)) {
    foreach ($_COOKIE as $key => $value) {
        print($key . ' : ' . $value);
        echo "<br/>";
    }
} else {
    echo "Cookie not set";
}
?>

<p>Enkel de waarde voor taal afdrukken kan natuurlijk ook via de regel print ( $_COOKIE[‘taal’] )</p>

<?php

if (isset($_COOKIE)) {
    print ($_COOKIE['taal']);
} else {
    echo "Cookie not set";
}
?>

<h3>Cookies verwijderen</h3>
<p>Dit kan door een tijd in het verleden te kiezen</p>
<pre>
    setcookie ("user", "", time() - 3600);
</pre>

<?php

if (isset($_COOKIE['taal'])) {

    setcookie ('taal', 'NL', time() - 3600);
} else {
    echo "Cookie not set";
}
?>


<h2>Sessions</h2>
<p>Bij sessies worden de gegevens bewaard op de server, maar krijgt de client nog wel een cookie met
    daarin het session_id om de juiste gegevens te kunnen ophalen.</p>
<p>Gegevens worden bewaard op de server en uitgelezen via de array $_SESSION:</p>
<pre>
    $_SESSION['name'] = 'Sofie';
    print ( $_SESSION['name'] );

</pre>

<p>Een sessie wordt gestart via het commando: </p>

<pre>
session_start();
</pre>

<?php
print ($_SESSION['name']);
?>

<p> De gegevens worden op de server bewaard in de map /var/lib/php/sessions/.<br/>
Note: you can only access this via sudo.</p>
<pre>
    vagrant@webadv:/var/lib/php$ sudo ls sessions
    sess_en9kvfmj9hf2c43hnok5l4k995
    vagrant@webadv:/var/lib/php$ sudo cat sessions/sess_en9kvfmj9hf2c43hnok5l4k995
    name|s:6:"Thomas";vagrant@webadv:/var/lib/php$ ls sessions
    ls: cannot open directory 'sessions': Permission denied
    vagrant@webadv:/var/lib/php$
</pre>
</body>
<head>
    <meta charset="UTF-8">
    <title>cookies en sessions</title>
</head>
</html>