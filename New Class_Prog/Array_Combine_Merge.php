<pre>
<?php


echo"<br>=============  array_combine() ===================<br>";

$arr=array(10,50,30,80,60,);

$arr1=array(10.5,50.3,30.9,80,60.4,);

$fa=array_combine($arr,$arr1);
echo"<br>";
print_r($fa);

echo"<br><br>";

$fa=array_combine($arr1,$arr);
echo"<br>";
print_r($fa);

echo"<br>================================<br>";

$arr2=array(10.5,50.3,30.9,80,60.4,40,32,);

$arr3=array(10,50,30,80,60,20,70,);

$fa=array_combine($arr2,$arr3);
echo"<br>";
print_r($fa);


echo"<br>================================<br>";


$arr=array(10,50,30,80,60,);

$arr1=array(10.5,50.3,30.9,80,60.4,);

$arr0=array(1000,5000,3000,8000,600,);

$fa=array_combine($arr,$arr1,$arr0);
echo"<br>";
print_r($fa);



echo"<br>================================<br>";

$arr2=array(10.5,50.3,30.9,80,60.4,40,32,);

$arr3=array(10,50,30,80,60,20,70,15,25);

$fa=array_combine($arr2,$arr3);
echo"<br>";
print_r($fa);


echo"<br>================================<br>";





echo"<br>=============  array_merge() ===================<br>";





$arr5=array(10,50,30,80,60,);

$arr6=array(10.5,50.3,30.9,80,60.4,);

$fa=array_merge($arr5,$arr6);
echo"<br>";
print_r($fa);

echo"<br><br>";

$fa=array_merge($arr6,$arr5);
echo"<br>";
print_r($fa);

echo"<br>================================<br>";

$arr7=array(10.5,50.3,30.9,80,60.4,40,32,);

$arr8=array(10,50,30,80,60,20,70,);

$fa=array_merge($arr7,$arr8);
echo"<br>";
print_r($fa);


echo"<br>================================<br>";


$arr11=array(10,50,30,80,60,);

$arr22=array(10.5,50.3,30.9,80,60.4,);

$arr33=array(1000,5000,3000,8000,600,);

$fa=array_merge($arr11,$arr22,$arr33);
echo"<br>";
print_r($fa);



echo"<br>================================<br>";

$arr9=array(10.5,50.3,30.9,80,60.4,40,32,);

$arr10=array(10,50,30,80,60,20,70,15,25,35,45,);

$fa=array_merge($arr9,$arr10);
echo"<br>";
print_r($fa);





?>