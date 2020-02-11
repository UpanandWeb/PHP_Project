<pre>
<?php

$arr1=array(
			20,70.9,80,50,10.2,100,
			);
sort($arr1);
print_r($arr1);

echo"<br>================================<br>";

rsort($arr1);
print_r($arr1);

echo"<br><br>";
echo"<br>================================<br>";

$arr2=array(
			"Name "=>" Upanand",
			"City "=>" Hyderabad",
			"State "=>" Telengana",
			"Pincode "=> 500038,
			20.5,70.9,80,50,10.2,40,
			);

sort($arr2);
print_r($arr2);

echo"<br>================================<br>";

rsort($arr2);
print_r($arr2);

echo"<br><br><br><br><br><br>";
echo"<br>================================<br>";
?>