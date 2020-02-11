<pre>
<?php

$arr=[10,70,40,10,70,40,30,50,60,50,];

print_r($arr);

$fa=array_unique($arr);

echo "<br>"."Repeated Value Remove position & value then display"."<br><br>";
print_r($fa);


echo"<br>================================<br>";

echo "Starting 0th position value display  ".current($arr); //Starting 0th position value display

echo"<br>================================<br>";

echo "Last nth position value display  ".end($arr); //Last nth position value display

echo"<br>================================<br>";

echo "Previous value display  ".Prev($arr);

echo"<br>================================<br>";

echo "Previous value display  ".Prev($arr);

echo"<br>================================<br>";

echo "Current value & Position display  ".current($arr);

echo"<br>================================<br>";

echo "Next value & Position display  ".next($arr);

echo"<br>================================<br>";



$arr1=[
			"name"=>"Ram",
			"City"=>"Hyd",
			"state"=>"TS",
		];

$fa=array_keys($arr1);
print_r($fa);

echo"<br>================================<br>";

$arr1=[
			"name"=>"Ram",
			"City"=>"Hyd",
			"state"=>"TS",
		];

$fa=array_values($arr1);
print_r($fa);

echo"<br>================================<br>";

$arr2=[10,70,40,60,70,40,30,50,60,50,];

$fa=array_slice($arr2,3);

Print_r($fa);

echo"<br>================================<br>";

$fa=array_slice($arr2,3,2);

Print_r($fa);


echo"<br>================================<br>";


$fa=array_slice($arr2,0,5);

Print_r($fa);


?>