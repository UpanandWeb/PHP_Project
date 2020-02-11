<html>
<head>
<title>Cookie Transfer</title>
</head>
<body>
		<h1>Collect Persion Info</h1>
		<?php
		
		$n1=$_COOKIE['number1'];
		$u1=$_COOKIE['username1'];
		$e1=$_COOKIE['email1'];
		$m1=$_COOKIE['mobile1'];
		
		$n2=$_COOKIE['number2'];
		$u2=$_COOKIE['username2'];
		$e2=$_COOKIE['email2'];
		$m2=$_COOKIE['mobile2'];
		
		$n3=$_POST['num3'];
		$u3=$_POST['uname3'];
		$e3=$_POST['mail3'];
		$m3=$_POST['mob3'];
		
		$sum=$n1+$n2+$n3;		
			
		echo"the Summation of the Nu. ".$sum;
		echo"<br>";
		echo"<h2>Person 1 Info:</h2>";
		echo"<br>";
		echo "username1  :-"."$u1";
		echo"<br>";
		echo "email1  :-"."$e1";
		echo"<br>";
		echo "mobile1  :-"."$m1";
		
		
		echo"<br>";
		echo"<h2>Person 2 Info:</h2>";
		echo"<br>";
		echo "username2  :-"."$u2";
		echo"<br>";
		echo "email2  :-"."$e2";
		echo"<br>";
		echo "mobile2  :-"."$m2";
		
		
		echo"<br>";
		echo"<h2>Person 3 Info:</h2>";
		echo"<br>";
		echo "username3  :-"."$u3";
		echo"<br>";
		echo "email3  :-"."$e3";
		echo"<br>";
		echo "mobile3  :-"."$m3";
		?>
</body>

</html>