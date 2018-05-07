<?php
header('Content-Type: application/json');
$name = $_GET['name'];
$user = 'root';
$password = 'root';
$database = 'oef1';
$table = 'names';

if ($name != '') {
    $pdo = null;
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=oef1', $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->query('SELECT DISTINCT name FROM ' . $table . ' WHERE name LIKE \'' . $name . '%\' ');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $result = $stmt->fetchAll();
        print(json_encode($result));

    } catch (PDOException $e) {
        print ('Exception!: ' . $e->getMessage());
    }
    $pdo = null;
}