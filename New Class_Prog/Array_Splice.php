<pre>
<?php


echo"<br>=============  Splice() ===================<br>";

$arr1=[100,700,400,300,500,600,200,999];

Print_r($arr1);

array_splice($arr1,5);

Print_r($arr1);

echo"<br>================================<br>";

$arr5=[10,700,40,300,50,600,20,999];

Print_r($arr5);

array_splice($arr5,5,1);

Print_r($arr5);


echo"<br>================================<br>";


array_splice($arr1,3,0,5000);

Print_r($arr1);

echo "<br><br><br><br><br><br><br><br>";







echo"<br>============= Slice() ===================<br>";

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