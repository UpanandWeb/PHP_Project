<pre>
<?php

$con=mysqli_connect("localhost","root","","contact_form")or die("unable to Found");

$data=mysqli_query($con,"select * from employee_deatails");

	if(mysqli_num_rows($data)>0)
	{
		echo"yes,We have to display Records";
		echo"<br>";
		echo"<br>";
		echo"No. of Records  ". mysqli_num_rows($data);
		echo"<br>";
		echo"<br>";
		print_r($data);
		
	}
	else
	{
			echo"<p>Sorry ! No Record Founds</p>";
	}




echo"<br>";
echo"<br>================================================================<br>";
//  another Way to Print Record in Database

$con=mysqli_connect("localhost","root","","contact_form")or die("unable to Found");

$data=mysqli_query($con,"select * from employee_deatails");
print_r($data);

echo"<br>";
echo"<br>";

echo"No. of Records  ". mysqli_num_rows($data);

echo"<br>";
echo"<br>================================================================<br>";

?>