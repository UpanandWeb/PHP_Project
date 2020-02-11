<?php
echo"<br>=============  array_sum() ===================<br>";
$arr=array(10,50,30,80,60,);

array_sum($arr);
echo"<br>";
echo array_sum($arr);

echo"<br>================================<br>";

$arr1=array(10.5,50.3,30.9,80,60.4,"Name"=>"Ram","City"=>"Hyd","State"=>"T S ","Pincode"=>500038,);

array_sum($arr1);
echo"<br>";
echo array_sum($arr1);

echo"<br>================================<br>";

echo"<br>=============  array_product() ===================<br>";
$arr=array(10,50,30,80,60,);

array_product($arr);
echo"<br>";
echo array_product($arr);

echo"<br>================================<br>";

$arr1=array(10.5,50.3,30.9,80,60.4,"Name"=>"Ram","Pincode"=>500038,);

array_product($arr1);
echo"<br>";
echo array_product($arr1);

echo"<br>================================<br>";
?>