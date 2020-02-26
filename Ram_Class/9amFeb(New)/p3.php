
	<h1>Person 3</h1>
		<form method="POST" action="p4.php">
			Number3<input type="text" name="num3">
			<input type="submit" value="Go">
		</form>

<?php
session_start();
$_SESSION['number2']=$_POST['num2'];
//setcookie("number2",$_POST['num2']);
 ?>