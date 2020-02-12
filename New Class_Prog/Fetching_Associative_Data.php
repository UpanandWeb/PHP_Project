<?php

$con=mysqli_connect("localhost","root","","contact_form")or die("unable to Connect-found DB");

$resultSet=mysqli_query($con,"select * from employee_deatails");

$row=mysqli_fetch_assoc($resultSet);

echo"<pre>";

print_r($row);

echo"<br>";
print_r($row)
?>