<?php
header('Content-Type: application/json');
$name = $_POST['name'];
$user = 'root';
$password = 'root';
$database = 'oef1';
$table = 'names';

if ($name != '') {
    $pdo = null;
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=oef1', $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $statement = $pdo->prepare('INSERT INTO names (name) VALUES (?)');
       $statement->bindParam(1, $name, PDO::PARAM_STR);
       $numberRows = $statement->execute();

       print ("$numberRows rows modified");

    } catch (PDOException $e) {
        print ('Exception!: ' . $e->getMessage());
    }
    $pdo = null;
}