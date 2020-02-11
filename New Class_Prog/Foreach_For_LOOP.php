<?php

$arr1=array(40,80,50,90,20,70,40,80,50,90,20,70);

$n=count($arr1);

echo $n;
echo"<br><br>";

for($i=0;$i<$n;$i++)
{
	echo $arr1[$i];
	echo"<br>";
}

echo"<br>================================<br>";
echo"<br><br>";
foreach($arr1 as $x)
{
	echo $x;
	echo"<br>";
}



echo"<br>================================<br>";

echo"<br><br>";
$arr2=array(
			"Math"=>84,
			"Science"=>89,
			"Physics"=>78,
			"Chemistry"=>91,
			"Biology"=>88,
			"Math1"=>84,
			"Science1"=>89,
			"Physics1"=>78,
			"Chemistry1"=>91,
			"Biology1"=>88,
			);
			
$m=sizeof($arr2);

echo $m;
echo"<br><br>";

for($j=0;$j<$m;$j++)
{
	echo $arr1[$j];
	echo"<br>";
}

echo"<br>================================<br>";

foreach($arr2 as $y=>$x)
{
	echo $y;
	echo"<br>";
}
			
echo"<br>================================<br>";

foreach($arr2 as $y=>$x)
{
	echo $x;
	echo"<br>";
}
	
	
?>