
<?php

session_start();

$n1=$_SESSION['number1'];
$u1=$_SESSION['username1'];
$e1=$_SESSION['email1'];
$m1=$_SESSION['mobile1'];


echo"<br>";

echo"<br>".$n1;
echo"<br>".$u1;
echo"<br>".$e1;
echo"<br>".$m1;

echo"<br>";


echo"<br>================================================================<br>";


$n2=$_SESSION['number2'];
$u2=$_SESSION['username2'];
$e2=$_SESSION['email2'];
$m2=$_SESSION['mobile2'];


echo"<br>";

echo"<br>".$n2;
echo"<br>".$u2;
echo"<br>".$e2;
echo"<br>".$m2;

echo"<br>";


echo"<br>================================================================<br>";

$n3=$_POST['num3'];
$u3=$_POST['uname3'];
$e3=$_POST['mail3'];
$m3=$_POST['mob3'];


echo"<br>";

echo"<br>".$n3;
echo"<br>".$u3;
echo"<br>".$e3;
echo"<br>".$m3;

echo"<br>";
		
echo"<br>================================================================<br>";

/* session_start();
$_SESSION['number1']=$_POST['num1'];
$_SESSION['username1']=$_POST['uname1'];
$_SESSION['email1']=$_POST['mail1'];		
$_SESSION['mobile1']=$_POST['mob1'];


$_SESSION['number2']=$_POST['num2'];
$_SESSION['username2']=$_POST['uname2'];
$_SESSION['email2']=$_POST['mail2'];		
$_SESSION['mobile2']=$_POST['mob2'];

$_SESSION['number3']=$_POST['num3'];
$_SESSION['username3']=$_POST['uname3'];
$_SESSION['email3']=$_POST['mail3'];		
$_SESSION['mobile3']=$_POST['mob3']; */

?>