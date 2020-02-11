<?php

$x=1000;
echo "The Value of X =".$x;
echo"<br>";

echo"<br>";
echo"<br>";

//Isset Function Return Value True i.e. 1

$x=1000;
echo "The Value of isset X =".isset($x);  //1
echo"<br>";

echo"<br>=============================<br>";
$y;
echo "The Value of isset Y =".isset($y); //Empty
echo"<br>";

echo"<br>=============================<br>";

$z=null;
echo "The Value of isset Z =".isset($z); //Empty
echo"<br>";

echo"<br>=============================<br>";

$a=" ";
echo "The Value of isset A =".isset($a); //1
echo"<br>";


echo"<br>=============================<br>";
//unset Function does NotReturn Value True or false i.e. 1 or nothing

/*  

	$p;
	echo "The Value of p=".$p; //just like  Error Undefined variable: p 
	echo"<br>";

	Notice: Undefined variable: p in C:\xampp\htdocs\Class_Prog\Funtion_IsSet.php on line 33 */
	
	

$x=1000;
unset($x);
echo "The Value of unset X =".$x;  //Undefined variable: false i.e.  nothing show
echo"<br>";

echo"<br>=============================<br>";

$y;
unset($y);
echo "The Value of unset Y =".$y; //Undefined variable: false i.e.  nothing show
echo"<br>";

echo"<br>=============================<br>";

$z=null;
unset($z);
echo "The Value of unset Z =".$z; //Undefined variable: false i.e.  nothing show
echo"<br>";

echo"<br>=============================<br>";

$a=" ";
unset($a);
echo "The Value of unset A =".$a; //Undefined variable: false i.e.  nothing show
echo"<br>";


?>