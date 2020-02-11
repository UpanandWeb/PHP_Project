
<?php

echo filectime( "Good.txt");

echo"<br>";

echo filectime( "Array.php");


echo"<br>";

echo filectime( "Hi.txt");


echo"<br>==================================================================<br>";

date_default_timezone_set("asia/kolkata");

echo date(" Y-m-d",filectime( "Good.txt"));

echo"<br>";

echo date(" Y-m-d h:i:s A",filectime( "Array.php"));


echo"<br>";

echo date(" Y-m-d h:i:s A",filectime( "Hi.txt"));

echo"<br>==================================================================<br>";



date_default_timezone_set("asia/kolkata");

echo date(" Y-m-d",filemtime( "Good.txt"));

echo"<br>";

echo date(" Y-m-d h:i:s A",filemtime( "Array.php"));


echo"<br>";

echo date(" Y-m-d h:i:s A",filemtime( "Hi.txt"));

echo"<br>==================================================================<br>";

?>