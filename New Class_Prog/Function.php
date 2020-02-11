<?php

//function

function wish()
{
	echo"Hello, Guys !! I Am Upanand";
	echo "<br>";
	echo"My Dream To Become a web developer";
	echo"<br>","pleased Well wishes to Me !";
}
wish();

echo"<br>=============================<br>";
//Non-Parametrised Function


function addition()
{
$x=200;
$y=300;
 echo "addition  of Numbers";
 echo"<br>";
 echo $x+$y;
 echo"<br>";
}
addition();

addition();


echo"<br>=============================<br>";

//Parametrised Function



function add($x,$y)
{
	echo "addition  of Numbers";
	echo"<br>";
	echo $x+$y;
	echo"<br>";
}
add(100,300);
add(75,24);
add(1108,1210);


echo"<br>=============================<br>";

function Birthday($Date,$Time)
{
	
	echo"this is Birthday Function";
	echo"<br>";
	echo $Date." <br>   ".$Time ."AM";
	echo"<br>";
}
so
Birthday(11.08,7.35);
Birthday(11.10,5.32);
Birthday(23.11,3.38);

?>