<pre>
<?php


echo"<br>==========  asort()  ======================<br>";

$arr=array(10=>"Ram",80=>"Hyd",30=>"T S ",70=>"Ameerpeth",50=>500038,);

echo asort($arr);
echo"<br>";
print_r($arr);

echo"<br>================================<br>";



$arr1=array("Name"=>"Ram","City"=>"Hyd","State"=>"T S ","Area"=>"KukatPally","Pincode"=>500038,);

echo asort($arr1);
echo"<br>";
print_r($arr1);

echo"<br>================================<br>";


$arr2=array(10=>"Sham",80=>"Bang",30=>"Andra ","Name"=>"Ram","City"=>"Hyd","State"=>"T S ","Pincode"=>500038,);

echo asort($arr2);
echo"<br>";
print_r($arr2);

echo"<br>================================<br>";
echo"<br>================================<br>";
echo"<br>==========  arsort()  ======================<br>";


$arr3=array(10=>"Ram",80=>"Hyd",30=>"T S ",70=>"Ameerpeth",50=>500038,);

echo arsort($arr3);
echo"<br>";
print_r($arr3);

echo"<br>================================<br>";



$arr4=array("Name"=>"Ram","City"=>"Hyd","State"=>"T S ","Area"=>"KukatPally","Pincode"=>500038,);

echo arsort($arr4);
echo"<br>";
print_r($arr4);

echo"<br>================================<br>";


$arr5=array(10=>"Sham",80=>"Bang",30=>"Andra ","Name"=>"Ram","City"=>"Hyd","State"=>"T S ","Pincode"=>500038,);

echo arsort($arr5);
echo"<br>";
print_r($arr5);

echo"<br>================================<br>";

?>
