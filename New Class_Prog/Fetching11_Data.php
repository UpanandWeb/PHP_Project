<pre>
<?php

$con=mysqli_connect("localhost","root","","contact_form")or die("unable to Found");

$data=mysqli_query($con,"select * from employee_deatails");

//  another Way to Print Record in Database

	if(mysqli_num_rows($data)>0)
	{
		echo"yes,We have to display Records";
		echo"<br>";		
		$rec=mysqli_fetch_row($data);		
		echo"<br>";
		print_r($rec);
		
		echo"<br>======== Print ( Record Found)===============<br>";
		echo"<br>";		
		$rec=mysqli_fetch_row($data);		
		echo"<br>";
		print_r($rec);
		
		echo"<br>========= Print ( Record Found)==============<br>";
		echo"<br>";		
		$rec=mysqli_fetch_row($data);		
		echo"<br>";
		print_r($rec);
		
		echo"<br>========== Print ( Record Found)=============<br>";
		echo"<br>";		
		$rec=mysqli_fetch_row($data);		
		echo"<br>";
		print_r($rec);
		
		echo"<br>==========Nothing Print (No Record Found)=============<br>";
		echo"<br>";		
		$rec=mysqli_fetch_row($data);		
		echo"<br>";
		print_r($rec);
		
		echo"<br>==========Nothing Print (No Record Found)=============<br>";
		echo"<br>";		
		$rec=mysqli_fetch_row($data);		
		echo"<br>";
		print_r($rec);
	}
	else
	{
			echo"<p>Sorry ! No Record Founds</p>";
	}




echo"<br>";
echo"<br>================================================================<br>";



?>