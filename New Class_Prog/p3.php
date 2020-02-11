<html>
<head>
<title>Cookie Transfer</title>
</head>
<body>
		<h1>Persion 3</h1>
		<form enctype="multipart/form-data" method="POST" action="p4.php">
		Number3 <input type="text" name="num3">		
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
setcookie("number2",$_POST['num2']);
setcookie("username2",$_POST['uname2']);
setcookie("email2",$_POST['mail2']);
setcookie("mobile2",$_POST['mob2']);
?>