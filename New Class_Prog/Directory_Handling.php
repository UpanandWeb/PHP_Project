<?php

$dp=opendir("Indus_Group");
echo $dp;




echo"<br>";
echo"<br>";

echo"<br>==================================================================<br>";

$dp=opendir("Indus_Group");

	while($file=readdir($dp))
		{
			echo $file."<br>";
		}


echo"<br>";
echo"<br>";
echo"<br>==================================================================<br>";


$dp=opendir("Indus_Group");

	while($file=readdir($dp))
		{
			
			if( !($file=="."||$file==".."))
			{			
			echo $file."<br>";
			}
			
		}


echo"<br>";
echo"<br>";
echo"<br>==================================================================<br>";


   $dp=opendir("Indus_Group");

	while($file=readdir($dp))
		{
			
			if( !($file=="."||$file==".."))
			{
				$arr=explode(".",$file);
				$ext=end($arr);
					if($ext=="png"||$ext=="jpg"||$ext=="jpeg")
					{
						echo $file."<br>";
					}
				
			}
			
		}


echo"<br>";
echo"<br>";
echo"<br>==================================================================<br>";




   $dp=opendir("Indus_Group");

	while($file=readdir($dp))
		{
			
			if( !($file=="."||$file==".."))
			{
				$arr=explode(".",$file);
				$ext=end($arr);
					if($ext=="png"||$ext=="jpg"||$ext=="jpeg")
					{
						echo "<img src='Indus_Group/$file' height='100' width='100'>";
					}
				
			}
			
		}


echo"<br>";

echo"<br>==================================================================<br>";



   $dp=opendir("Indus_Group");

	while($file=readdir($dp))
		{
			
			if( !($file=="."||$file==".."))
			{
				$arr=explode(".",$file);
				$ext=end($arr);
					if($ext=="txt"||$ext=="doc")
					{
						echo $file."<br>";
					}
				
			}
			
		}


echo"<br>";
echo"<br>";
echo"<br>==================================================================<br>";





   $dp=opendir("Indus_Group");

	while($file=readdir($dp))
		{
			
			if( !($file=="."||$file==".."))
			{
				$arr=explode(".",$file);
				$ext=end($arr);
					if($ext=="html"||$ext=="css")
					{
						echo $file."<br>";
					}
				
			}
			
		}


echo"<br>";
echo"<br>";
echo"<br>==================================================================<br>";




$dir="js";

	if(file_exists($dir))
		{
			rmdir($dir);
			echo "<p>$dir is Delelted Succesfully</p>";
		}
		else
		{
			echo "<p>$dir is Not Exists </p>";
		}







echo"<br>";

echo"<br>==================================================================<br>";




?>