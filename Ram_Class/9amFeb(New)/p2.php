
	<h1>Person 2</h1>
		<form method="POST" action="p3.php">
			Number2<input type="text" name="num2">
			<input type="submit" value="Go">
		</form>

<?php
session_start();
$_SESSION['number1']=$_POST['num1'];
//setcookie("number1",$_POST['num1']);
 ?>

