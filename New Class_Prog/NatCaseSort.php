<pre>
<?php


echo"<br>==========  natcasesort()  ======================<br>";

$arr=array(10=>"Ram",80=>"Hyd",30=>"T S ",70=>"HYD",50=>"RAM",);

echo natcasesort($arr);
echo"<br>";
print_r($arr);

echo"<br>================================<br>";



$arr1=array("Name"=>"Ram","City"=>"Hyd","State"=>"T S ","Area"=>"t s ","Nickname"=>"ram",);

echo natcasesort($arr1);
echo"<br>";
print_r($arr1);

echo"<br>================================<br>";


$arr2=array(10=>"Sham",80=>"Bang",30=>"Andra ","Name"=>"Ram","City"=>"Hyd","State"=>"T S ","Pincode"=>500038,);

echo natcasesort($arr2);
echo"<br>";
print_r($arr2);

echo"<br>================================<br>";
echo"<br>================================<br>";

?>