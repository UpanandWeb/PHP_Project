<pre>
<?php


$con=mysqli_connect("localhost","root","","contact_form")or die("unable to Found");

$data=mysqli_query($con,"select * from employee_deatails");

//  another Way to Print Record in Database

if(mysqli_num_rows($data)>0)
	{
		for( ;$rec=mysqli_fetch_row($data); )
		{
			
				echo"<br>======== Print ( Record Found)===============<br>";
				echo"<br>";
				echo"yes,We have to display Records";
				echo"<br>";		
					echo"Id  =  ".$rec[0]."<br>";
					echo"Name =  ".$rec[1]."<br>";
					echo"Email =  ".$rec[2]."<br>";
					echo"Mobile =  ".$rec[3]."<br>";
					echo"City  =  ".$rec[4]."<br>";
					echo"Message =  ".$rec[5]."<br>";
					echo"Date of Join =  ".$rec[6]."<br>";
				echo"<br>";
			
			
			
			/*
				echo"<br>======== Print ( Record Found)===============<br>";
				echo"<br>";
				echo"yes,We have to display Records";
				echo"<br>";				
				echo"<br>";
				print_r($rec);
			*/
			
		}
		
		
	}
	else
	{
			echo"<p>Sorry ! No Record Founds</p>";
	}




echo"<br>";


?>