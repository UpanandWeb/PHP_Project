<?php

$fp=fopen("Hi.txt","r");

echo fgets($fp);


echo"<br>==================================================================<br>";


$fp=fopen("Good.txt","r");

	for(;$line=fgets($fp);) // It take HTML Tags and effect on Text
		{
		echo $line."<br>";
		}

echo"<br>==================================================================<br>";



$fp=fopen("Good.txt","r");

	for(;$line=fgetss($fp);) // Deos not take HTML Tags
		{
		echo $line."<br>";
		}


echo"<br>==================================================================<br>";

echo file_put_contents( "Good.txt","WelCome To My File");


echo"<br>==================================================================<br>";





echo"<br>==================================================================<br>";


?>