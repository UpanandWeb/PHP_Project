
<html>
<head>
<title>Session Data Transfer</title>
</head>
<body>
		<h1>Session Data Transfer</h1>
		<h1>Persion 2</h1>
		<form method="POST" action="s4.php">
		Number2 <input type="text" name="num3">
		<br>
		
					Username <br>
					<input type="text" name="uname3">
					<br><br><br>
					 Email <br>
					<input type="text" name="mail3">
					<br><br><br>
					Mobile<br>
					<input type="text" name="mob3">
		
		<br><br>
		<input type="submit" value="Go">
		
		</form>

</body>
</html>

<?php
session_start();

$_SESSION['number2']=$_POST['num2'];
$_SESSION['username2']=$_POST['uname2'];
$_SESSION['email2']=$_POST['mail2'];		
$_SESSION['mobile2']=$_POST['mob2'];
?>