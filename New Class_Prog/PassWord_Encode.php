<?php

$str1="1234567890";

echo"<br><br>";

echo "String No. Display ".$str1;

echo"<br><br>";

$otp=substr(str_shuffle($str1),2,6);

echo "String No. OTP Generated ".$otp;
echo"<br><br>";

echo"<br>============= String Password Handling md5() ===================<br>";

echo"<br><br>";
$password1="HeLLo UpaNANd !";

echo $password1;
echo"<br><br>";
echo "we can convert string in 32 bit"."<br>";
echo md5($password1); // we can convert string in 32 bit
echo"<br><br>";


echo"<br><br>";
$password2="HeLLo@UpaNANd#1234!";

echo $password2;
echo"<br><br>";
echo "we can convert string in 40 bit"."<br>";
echo sha1($password2); // we can convert string in 40 bit
echo"<br><br>";


echo"<br><br>";
$password3="HeLLo!UpaNANd@123";

echo $password3;
echo"<br><br>";
echo "we can convert string encode in 64 bit"."<br>";
echo base64_encode($password3); // we can convert string encode in 64 bit
echo"<br><br>";



echo"<br><br>";
$password3="SGVMTG8hVXBhTkFOZEAxMjM=";

echo $password3;
echo"<br><br>";
echo "we can convert string in decode 64 bit"."<br>";
echo base64_decode($password3); // we can convert string decode in 64 bit
echo"<br><br>";
?>