<?php 
$con = mysqli_connect("localhost","root","","9am") or die("Unable to Connect");

// 4th step
$resultSet=mysqli_query($con,"select *from enquiry");

$cols = mysqli_fetch_fields($resultSet);
echo "<pre>";
print_r($cols);
