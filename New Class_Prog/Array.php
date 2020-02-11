<pre>
<?php


$arr1=Array(10,30,20.5,50);

print_r($arr1);

echo "<br>===========================<br>";

$arr2=Array(10,"hello",20.5,"test",true);

print_r($arr2);


echo "<br>===========================<br>";

$name=["PHP","HTML","CSS",'js',"JQuery"];

print_r ($name);

echo $name[3],"<br>"; 
print_r ($name[1]);
// echo $name[5]; //Error - Underfine OffSet 5 Position

echo "<br>===========================<br>";

$arr3=["PHP",12,True,'js',false,20.5];
print_r ($arr3);

echo "<br>===========================<br>";

$arr4=[20=>"PHP","HTML",25=>"CSS",'js',"JQuery"];

print_r ($arr4);

echo "<br>===========================<br>";

$arr5=[25=>"PHP","HTML",20=>"CSS",'js',"JQuery"];

print_r ($arr5);


echo "<br>===========================<br>";


$arr4=[14=>"PHP","HTML",15=>"CSS",25=>'js',"JQuery"];

print_r ($arr4);

echo "<br>===========================<br>";

$arr6=[14=>"PHP","HTML",20=>"CSS",25=>'js',"JQuery"];

print_r ($arr6);

echo "<br>===========================<br>";


$arr7=[24=>"PHP","HTML",15=>"CSS",'js',22=>"JQuery"];

print_r ($arr7);


echo "<br>===========================<br>";

$arr8=[1=>"PHP",1=>"HTML",1=>"CSS",1=>'js',1=>"JQuery"];

print_r ($arr8);


echo "<br>===========================<br>";

$arr9=[-2=>"PHP","HTML","CSS",'js',"JQuery"];

print_r ($arr9);


echo "<br>===========================<br>";

$arr10=[-3=>"PHP","HTML","CSS",'js',"JQuery"];

print_r ($arr10);

echo "<br>===========================<br>";

$arr11=[5-3=>"PHP","HTML","CSS",'js',"JQuery"];

print_r ($arr11);

?>