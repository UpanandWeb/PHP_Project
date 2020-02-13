<?php

$con=mysqli_connect("localhost","root","","contact_form")or die("unable to Connect-found DB");

$resultSet=mysqli_query($con,"select * from employee_deatails");

$data=mysqli_num_fields($resultSet);

echo"<pre>";
echo"<br>"."Number fo Column(Fields)  = ";
print_r($data);


echo"<br>======================================================<br>";

$row=mysqli_fetch_field($resultSet);

echo"<pre>";

print_r($row);

echo"<br>";



echo"<br>======================================================<br>";

//  $rloop=mysqli_fetch_field($resultSet);

	for(;$rloop=mysqli_fetch_field($resultSet);)
	{
		
		echo $rloop->email;
	}

echo"<br>";
?> 