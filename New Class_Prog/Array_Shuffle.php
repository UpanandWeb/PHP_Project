<pre>
<?php

echo"<br>=============  Shuffle() ===================<br>";
$arr=array(10,50,30,80,60,90,);

print_r ($arr);
shuffle($arr);
echo"<br>";
print_r ($arr);

echo"<br>================================<br>";


print_r ($arr[2]);
echo"<br>";
print_r ($arr[5]);

echo"<br>";
echo"<br>=============  array_key_exists() ===================<br>";



$arr5=array(10=>"Ram",30=>"Hyd","TS","Pincode"=>500038,);

Print_r($arr5);
echo "element Pincode found in key_exists  ". array_key_exists("Pincode",$arr5);
echo "<br>";
echo "element 30 found in key_exists  ".array_key_exists(30,$arr5);
echo "<br>";
echo "element TS found in key_exists  ".array_key_exists("TS",$arr5);
echo "<br>";

echo"<br>================================<br>";

$arr6=array(10=>"Ram",30=>"Hyd","TS","Pincode"=>500038,);

Print_r($arr6);
echo "element 30 found in key_exists  ". array_key_exists(30,$arr6);
echo "<br>";
echo "element TS found in key_exists  ". array_key_exists("TS",$arr6);
echo "<br>";
echo "element 40 found in key_exists  ". array_key_exists(40,$arr6);
echo "<br>";



echo"<br>================================<br>";



$arr7=array("Name"=>"Ram","City"=>"Hyd","State"=>"T S ","Pincode"=>500038,);

Print_r($arr7);
echo "element State found in key_exists  ". array_key_exists("State",$arr7);
echo "<br>";
echo "element City found in key_exists  ". array_key_exists("City",$arr7);
echo "<br>";
echo "element NickName found in key_exists  ". array_key_exists("NickName",$arr7);
echo "<br>";
echo "element Name found in key_exists  ". array_key_exists("Name",$arr7);
echo "<br>";
echo "element Location found in key_exists  ". array_key_exists("Location",$arr7);
echo "<br>";
echo"<br>================================<br>";


?>