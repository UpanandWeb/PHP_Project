

<html>
<head>
	<title>Contact Form</title>
</head>
<body>
			<h1>Contact Us</h1>
				<form action="" method="POST" >
					 Username <br>
					<input type="text" name="username">
					<br><br><br>
					 Email <br>
					<input type="text" name="mail">
					<br><br><br>
					Mobile<br>
					<input type="text" name="mobile">
					<br><br><br>
					<input type="submit" value="Login">
				</form>

</body>
</html>


<?php


echo"<br>==================================================================<br>";

$name=$_POST["username"];
$mail=$_POST["mail"];
$mob=$_POST["mobile"];

echo "USERNAME "."$name"."<br>";

echo "EMAIL "."$mail"."<br>";

echo "MOBILE NO. "."$mob"."<br>";

echo"<br>==================================================================<br>";

 ?>