<?php
$user = 'root';
$password = 'root';
$pdo = null;

try {
    $pdo = new PDO("mysql:host=localhost", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->query('SHOW DATABASES');
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $databases = [];
    while ($row = $statement->fetch()) {

        $databases[] = $row['Database'];
    }

    echo "<form method='post' action='verwerking.php'>";

    echo "Databank: ";
    echo createSelectBox($databases);
    echo "<br/>";
    echo "SQL-QUERY (drop, delete en truncate niet toegelaten)";
    echo "<br/>";
    echo createTextArea();
    echo "<br/>";
    echo "<input type=\"submit\">";

    echo "</form>";


} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();
}
$pdo = null;


function createSelectBox($array)
{

    $output = '<select name="databaseValue">';
    foreach ($array as $value) {
        $output .= '<option value="' . $value . '">' . $value . '</option>';
    }
    $output .= '</select>';
    return $output;
}

function createTextArea()
{
    echo "<textarea name=\"queryTextArea\" rows=\"5\" cols=\"40\"></textarea>";
}
