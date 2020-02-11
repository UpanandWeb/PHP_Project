<pre>

<?php
$arr1=array(
			"HTML"=>85,
			"CSS"=>78,
			"JAVASCRIPT"=>83,
			"BOOTSTRAP"=>91,
			);
foreach($arr1 as $key=>$value)
{
	echo "$key"."=>>"."$value";
	echo"<br>";
	
}

echo"<br>================================<br>";

foreach($arr1 as $key=>$value)
{
	echo "$value"."=>>"."$key";
	echo"<br>";
	
}



echo"<br>================================<br>";

foreach($arr1 as $x=>$y)
{
	echo "$y"."=>>"."$x";
	echo"<br>";
	
}

echo"<br>================================<br>";

foreach($arr1 as $x) // Single Elements Means Always It Take Only Values
{
	echo "=>>"."$x";
	echo"<br>";
	
}


echo"<br>================================<br>";

foreach($arr1 as $y) // Single Elements Means Always It Take Only Values
{
	echo "=>>"."$y";
	echo"<br>";
	
}

echo"<br><br><br><br><br><br>";
echo"<br>================================<br>";

$arr2=array(
			"Name "=>" Upanand",
			"City "=>" Hyderabad",
			"State "=>" Telengana",
			"Pincode "=> 500038,
			);
foreach($arr2 as $key=>$value)
{
	echo "$key"."=>>"."$value";
	echo"<br>";
	
}


echo"<br>================================<br>";

foreach($arr2 as $key=>$value)
{
	echo "$value"."=>>"."$key";
	echo"<br>";
	
}



echo"<br>================================<br>";

foreach($arr2 as $x=>$y)
{
	echo "$y"."=>>"."$x";
	echo"<br>";
	
}



echo"<br>================================<br>";

foreach($arr2 as $x) // Single Elements Means Always It Take Only Values
{
	echo "=>>"."$x";
	echo"<br>";
	
}


echo"<br>================================<br>";

foreach($arr2 as $y) // Single Elements Means Always It Take Only Values
{
	echo "=>>"."$y";
	echo"<br>";
	
}
?>