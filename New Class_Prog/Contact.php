<?php

/* <!--Step 4.2 Connect to Database DB   --> */
$con=mysqli_connect("localhost","root","","signup")or die("Unable to connect to DB");

?>
<html>
	<head>
		<title>Contact Form</title>
		<style>
		<!--Step 2 Design Form using CSS  -->
		
		table
		{ border-collapse:collapse;
			border:none;
		}
		
		table tr td {padding:10px;}
		</style>
	</head>
	<body>
		<h1>Contact Form</h1>
		<?php
		/* <!--Step 4.1 Collect Form Data using PHP code -->*/
			if(isset($_POST['submit']))
			{
				//collect the form data
				$name=$_POST['name'];
				$email=$_POST['email'];
				
				// Insert Data into table 
				mysqli_query($con,"INSERT INTO `student_info` (`id`, `name`, `email`, `date`) VALUES (NULL, '$name', '$email', current_timestamp())");
				
				if(mysqli_affected_rows($con)==1)
				{
					echo"<br>";
					echo"  Thanks $name We will get back to soon !";
					echo"<br>";
				}
				else
				{
					echo"<br>";
					echo mysqli_error($con);
					echo"<br>";
					echo"sorry ! unable to submit, try Again";	
					echo"<br>";
				}
			
			
			}
		
		?>
		<!--Step 1 Create HTML-Form using HTML-tags  -->
		<form method="POST" action="" onsubmit="return validate()">
			<table border="1px">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" id="name"><td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="email"><td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Sent"><td>
				</tr>
			</table>
		</form>
		<script>
		<!--Step 3 Validate Form using Javascript  -->
		
		function validate()
		{
		var n=document.getElementById("name").value;	
			if(n=="")
			{
				alert("Enter Name");
				return false;
			}
			
			var e=document.getElementById("email").value;	
			if(e=="")
			{
				alert("Enter Email");
				return false;
			}
		}
		</script>
	</body>
</html>