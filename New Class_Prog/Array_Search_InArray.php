<pre>
<?php

$arr=array(20,50,40,10,80,30,);

Print_r($arr);
echo "element 40 found in index ". array_search(40,$arr);
echo "<br>";
echo "element 80 found in index ".array_search(80,$arr);
echo "<br>";
echo "element 60 found in index ".array_search(60,$arr);
echo "<br>";

echo"<br>================================<br>";

$arr1=array(10=>"Ram",30=>"Hyd","T S ","Pincode"=>500038,);

Print_r($arr1);
echo "element Pincode=500038 found in index ". array_search(500038,$arr1);
echo "<br>";
echo "element 80 found in index ".array_search(80,$arr1);
echo "<br>";
echo "element Ram found in index ".array_search("Ram",$arr1);
echo "<br>";

echo"<br>================================<br>";





$arr2=array("Name"=>"Ram","City"=>"Hyd","State"=>"T S ","Pincode"=>500038,);

Print_r($arr2);
echo "element T S  found in index ". array_search("T S ",$arr2);
echo "<br>";
echo "element 500038 found in index ".array_search(500038,$arr2);
echo "<br>";
echo "element Hyd found in index ".array_search("Hyd",$arr2);
echo "<br>";
echo "element 80 found in index ".array_search(80,$arr2);
echo "<br>";
echo "element Ram found in index ".array_search("Ram",$arr2);
echo "<br>";

echo"<br>================================<br>";

echo"<br>===============  in_array() =================<br>";




$arr3=array(20,50,40,10,80,30,);

Print_r($arr3);
echo "element 40 found in array ". in_array(40,$arr3);
echo "<br>";
echo "element 80 found in array ". in_array(80,$arr3);
echo "<br>";
echo "element 60 found in array ". in_array(60,$arr3);
echo "<br>";

echo"<br>================================<br>";
echo "<br>";

$arr4=array(10=>"Ram",30=>"Hyd","T S ","Pincode"=>500038,);

Print_r($arr4);
echo "element Pincode=500038 found in array" . in_array(500038,$arr4);
echo "<br>";
echo "element 80 found in array ". in_array(80,$arr4);
echo "<br>";
echo "element Ram found in array ". in_array("Ram",$arr4);
echo "<br>";


echo"<br>================================<br>";
echo"<br><br><br><br>";
echo"<br>=================  array_key_exists () ===============<br>";



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