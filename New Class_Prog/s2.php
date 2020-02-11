


<html>
<head>
<title>Session Data Transfer</title>
</head>
<body>
		<h1>Session Data Transfer</h1>
		<h1>Persion 2</h1>
		<form method="POST" action="s3.php">
		Number1 <input type="text" name="num2">
		<br>
		
					Username <br>
					<input type="text" name="uname2">
					<br><br><br>
					 Email <br>
					<input type="text" name="mail2">
					<br><br><br>
					Mobile<br>
					<input type="text" name="mob2">
		
		<br><br>
		<input type="submit" value="Go">
		
		</form>

</body>
</html>

<?php

session_start();
$_SESSION['number1']=$_POST['num1'];
$_SESSION['username1']=$_POST['uname1'];
$_SESSION['email1']=$_POST['mail1'];		
$_SESSION['mobile1']=$_POST['mob1'];		

?>


