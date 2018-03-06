<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database</title>
</head>
<body>
<?php
$user='root';
$password='root';
$database='persondb';
$pdo=null;

try{
    $pdo= new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    $numberRows = $pdo -> exec("DELETE FROM person WHERE " . "name LIKE 's%' ");
//    print("$numberRows rows modified");
    $statement = $pdo->query('SELECT * from person');
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    while($row = $statement->fetch()){
        print_r($row);
    }

//TODO: this doesn't run
    print("<table>");
    while($row = $statement->fetch()) {
        print('<tr><td>'.$row['id'].'</td><td>'
            .$row['name'].'</td></tr>'
        );
    };
    print("</table>");


    if($statement->rowCount() > 0) {
        $columnNames = [];
        for ($i = 0; $i < $statement->columnCount(); $i++) {
            $columnData = $statement->getColumnMeta($i);
            $columnName = $columnData['name'];
            $columnNames[] = $columnName;
        }

        print('<table>');
        print('<tr><th>' . implode('</th><th>', $columnNames) . '</th></tr>');

        while($row = $statement->fetch()) {
            print('<tr><td>' . implode('</td><td>', $row) . '</td></tr>');
        };

        print('</table>');
    }

} catch (PDOException $e){
    print 'Exception!: ' . $e->getMessage();
}

$pdo=null;
?>
</body>
</html>