<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>verwerking3</title>
</head>
<body>
<?php
foreach ( $_GET['vriend'] as $index => $vriend ) {
    print( $index. ': '.   $vriend . '<br/>' );
}
?>
</body>
</html>