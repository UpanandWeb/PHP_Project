<?php
session_start();
$con=mysqli_connect("localhost","root","","contact_form")or die("unable to Connect to DB");

if(isset($_SESSION['logintrue']))
{
	?>
	
		<html>
			<head>
			
			</head>
			<body>
					<h1> Welcome  to Home Page</h1>
					
					<br><br><br><br>
					<a href="login.php">Log Out</a>
			</body>
		</html>


	<?php
}
else
{
	header("Location:login.php");
}

?>