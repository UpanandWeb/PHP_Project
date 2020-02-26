<?php 
//4.2- Connect Database
$con=mysqli_connect("localhost","root","","9am");

?>
<html>
	<head>
		<title>Contact Form</title>
		<style>
			/* 2nd Step*/
			table{
				border-collapse:collapse;
				border:none;
			}
			table tr td{
				padding:10px;
			}
		</style>
	</head>
	<body>
		<h1>Contact Form</h1>
		<?php 
		/* 4th Step */
		if(isset($_POST['submit']))
		{
			//4.1-Collect the form data
			$name=$_POST['name'];
			$email=$_POST['email'];
			$mob=$_POST['mobile'];
			$msg=$_POST['msg'];
			
			//4.3 - Insert data into a table contact
			
			mysqli_query($con,"insert into contact(name,email,mobile,message) values('$name','$email','$mob','$msg')");
			
			if(mysqli_affected_rows($con)==1)
			{
				echo "Thanks! We will get back you soon";
			}
			else
			{
				echo mysqli_error($con);
				echo "Sorry! Unable to submit, Try again";
			}
			
		}
		?>
		
		<form method="POST" action="" onsubmit="return validate()">
			<table border="1">
				<tr>
					<td>Name *</td>
					<td><input type="text" name="name" id="name"></td>
				</tr>
				
				<tr>
					<td>Email *</td>
					<td><input type="text" name="email" id="email"></td>
				</tr>
				
				<tr>
					<td>Mobile</td>
					<td><input type="text" name="mobile" id="mobile"></td>
				</tr>
				
				<tr>
					<td>Message</td>
					<td><textarea name="msg" id="msg"></textarea></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Send"></td>
				</tr>
				
			</table>
		</form>
		<script>
			function validate()
			{
				var n = document.getElementById("name").value;
				if(n=="")
				{
					alert("Enter Name");
					return false;
				}
				
				var e = document.getElementById("email").value;
				if(e=="")
				{
					alert("Enter Email");
					return false;
				}
				
			}
		</script>
	</body>
</html>