<?php
$name = $_POST['name'];
$color = $_POST['color'];

setcookie ('name', $name,time() + 24 * 60 *60 );
setcookie ('color', $color,time() + 24 * 60 *60 );


echo "<form action=\"toon.php\" method=\"post\">";
  echo "<input type=\"hidden\" name=\"color\" value=\"<?php print $color;>\" />";
  echo "<input type=\"submit\">";
  echo "</form>";






