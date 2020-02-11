<pre>
<?php

$arr1=array(
			"Math"=>84,
			"Science"=>89,
			"Physics"=>78,
			"Chemistry"=>91,
			"Biology"=>88,
			"English"=>65,
			);
	
ksort($arr1);	
Print_r($arr1);

echo"<br>================================<br>";


krsort($arr1);	
Print_r($arr1);

echo"<br>================================<br>";






echo"<br><br>";
echo"<br>================================<br>";




$arr2=array(
			"Name "=>" Upanand",
			"City "=>" Hyderabad",
			"State "=>" Telengana",
			"Pincode "=> 500038,
			);
ksort($arr2);
print_r($arr2);

echo"<br>================================<br>";

krsort($arr2);
print_r($arr2);

echo"<br>================================<br>";

?>




