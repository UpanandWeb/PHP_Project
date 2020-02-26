<h1>Person 4</h1>
<?php 
session_start();
$n1=$_SESSION['number1'];
$n2=$_SESSION['number2'];
$n3=$_POST['num3'];

$sum=$n1+$n2+$n3;

echo "The sum is:".$sum;


?>