<pre>
<?php


echo"<br>============= String Handling substr() ===================<br>";

$str="HeLLo UpaNANd !";
echo substr($str,4);
echo"<br><br>";

$str1="how are you upanand !";
echo substr($str1,0,6);
echo"<br><br>";

$str2="can i meet  you upanand , tomarrow !";
echo substr($str2,5,14);
echo"<br><br>";



echo"<br>============= String Handling explode() ===================<br>";


$str3="100#700#400#300#500#600#200#999";

echo $str3;

$x=explode("#",$str3);

Print_r($x);

echo"<br>================================<br>";

echo"<br>============= String Handling implode() ===================<br>";

$arr1=array("name","Ram", "City", "Hyd","state","TS");

echo implode(" $ ",$arr1);
echo"<br><br>";


echo"<br>================================<br>";

/* $arr2=array("name" = "Ram" = "City" = "Hyd" = "state" = "TS");

echo implode("=",$arr2);
echo"<br><br>";


echo"<br>================================<br>";

$arr3=array("name"@ "Ram"@ "City"@ "Hyd"@ "state"@"TS");

echo implode("@",$arr3);
echo"<br><br>";

echo"<br>================================<br>";   

$arr4=array("name"/ "Ram"/ "City"/ "Hyd"/ "state"/"TS");

echo implode("/",$arr4);
echo"<br><br>";                       */



/*   Error Using in Various Symbol

 A non-numeric value encountered in C:\xampp\htdocs\Class_Prog\SubString_Handling.php on line 59
Warning:  Division by zero in C:\xampp\htdocs\Class_Prog\SubString_Handling.php on line 59



*/




?>