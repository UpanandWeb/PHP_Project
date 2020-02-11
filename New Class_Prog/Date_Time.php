<pre>
<?php

echo Date("Y  \n");

echo Date("y  \n");

echo Date("m  \n");

echo Date("Y d m \n");

echo Date("l d M Y  \n");

echo Date("l d F Y  \n");

echo Date("l d F Y  h:1 A  \n");

echo Date("l d F Y  h:1:s A  \n");


echo"<br>";

date_default_timezone_set('Asia/Dubai');
echo "The time in " . date_default_timezone_get() . Date("  l ds F Y  h:1 A  \n");

echo"<br><br>";
date_default_timezone_set('Asia/dhaka');
echo "The time in " . date_default_timezone_get() . " is " . date("  Y-m-d  H:i:s");

echo"<br><br>";

date_default_timezone_set("Asia/Calcutta");

echo "The time in " . date_default_timezone_get() . " is " . date("  Y-m-d  H:i:s");


?>