<?php

echo"<br>==================================================================<br>";

echo copy("hi.txt","Indus_Group/hi.txt");


echo"<br>==================================================================<br>";

$file="GoodEvening.txt";

	if(file_exists($file))
		{
			unlink($file);
			echo "$file Deleted Succesfully";
			
		}
	else
	{
		echo"$file is not found";
		
	}



echo"<br>==================================================================<br>";

$file="Good_Evining.txt";

	if(file_exists($file))
		{
			unlink($file);
			echo "$file Deleted Succesfully";
			
		}
	else
	{
		echo"$file is not found";
		
	}


echo"<br>";
echo"<br>";


date_default_timezone_set("asia/kolkata");

echo date(" Y-m-d",filectime( "Good.txt"));

echo"<br>";

echo date(" Y-m-d h:i:s A",filectime( "Array.php"));


echo"<br>";

echo date(" Y-m-d h:i:s A",filectime( "Hi.txt"));

echo"<br>==================================================================<br>";







?>