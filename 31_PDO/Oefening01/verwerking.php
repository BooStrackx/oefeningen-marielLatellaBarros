<?php

$database = $_POST['databaseValue'];
$queryStatement = $_POST['queryTextArea'];

if (stristr($queryStatement, 'drop') || stristr($queryStatement, 'delete') || stristr($queryStatement, 'truncate')) {
    echo "You do not have access to perform this action!";
} else {

    $user = 'root';
    $password = 'root';
    $pdo = null;

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->query($queryStatement);
        $statement->setFetchMode(PDO::FETCH_ASSOC);


        echo "query = " . $queryStatement;
        echo "<br/>";
        echo "databank = " . $database;
        echo "<br/>";


        print ("<table>");

        while ($row = $statement->fetch()) {
            print ('<tr><td>' . implode('</td><td>', $row) . '</td></tr>');
        }

        print ("<table>");


    } catch (PDOException $e) {
        print 'Exception!: ' . $e->getMessage();
    }
    $pdo = null;
}