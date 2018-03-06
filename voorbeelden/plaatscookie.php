<?php
setcookie ('taal', 'NL',time() + 24 * 60 *60 );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>plaatscookie</title>
</head>
<body>
Cookie geplaatst


<p>Bij cookies worden alle gegevens bewaard bij de client. Bij sessies worden de gegevens bewaard op de server, maar <br>
    krijgt de client nog wel een cookie met daarin het session_id om de juiste gegevens te kunnen ophalen.
    Een sessie wordt gestart via het commando</p><br>

    session_start();<br>

<p>Gegevens worden bewaard en uitgelezen via de array $_SESSION:</p><br>

    $_SESSION['name'] = 'Sofie';<br>
    print ( $_SESSION['name'] );

<p> De gegevens worden op de server bewaard in de map /var/lib/php/sessions/.</p>
<p>Check session.png foto</p>

</body>
</html>