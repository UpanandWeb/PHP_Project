<?php

date_default_timezone_set("asia/kolkata");

echo date(" Y-m-d h:i:s A");


echo"<br>==================================================================<br>";

date_default_timezone_set("asia/kolkata");

echo date(" Y-m-d h:i:s A", strtotime("2 days 1 year"));


echo"<br>==================================================================<br>";

date_default_timezone_set("asia/Dhaka");

echo date(" Y-F-d h:i:s A", strtotime("2 days 1 year"));


echo"<br>==================================================================<br>";

date_default_timezone_set("asia/kolkata");

echo date(" l", strtotime("11-11-1995"));


echo"<br>==================================================================<br>";

date_default_timezone_set("asia/kolkata");

echo date(" Y-m-d h:i:s A", strtotime("8 days 1 year"));



echo"<br><br>";

echo"<br>==================================================================<br>";
?>