<html>
<head>
<title>Cookie Transfer</title>
</head>
<body>
		<h1>Persion 2</h1>
		<form method="POST" action="p3.php">
		Number2 <input type="text" name="num2">
		
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
setcookie("number1",$_POST['num1']);
setcookie("username1",$_POST['uname1']);
setcookie("email1",$_POST['mail1']);
setcookie("mobile1",$_POST['mob1']);
?>