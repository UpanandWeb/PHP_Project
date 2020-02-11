<?php



echo"<br>============= String  password_hash() ===================<br>";

echo"<br><br>";
$password1="HeLLo UpaNANd !";

echo "password 1 ...  ".$password1;
echo"<br><br>";
echo "we can convert string in password_hash() <br> by PASSWORD_DEFAULT"."<br><br>";
echo password_hash($password1,PASSWORD_DEFAULT); // we can convert string by PASSWORD_DEFAULT
echo"<br><br>";

echo"<br>==========================================================";
echo"<br><br>";
$password2="HeLLo@UpaNANd#1234!";

echo "password 2 ...  ".$password2;
echo"<br><br>";
echo "we can convert string in password_hash() <br> by PASSWORD_DEFAULT"."<br><br>";
echo password_hash($password2,PASSWORD_DEFAULT); // we can convert string by PASSWORD_DEFAULT
echo"<br><br>";








echo"<br>============= String  password_hash() ===================<br>";

echo"<br><br>";
$password3="HeLLo UpaNANd !";

echo "password 3 ...  ".$password3;

$dbpwd3='$2y$10$43Rb5vAAAleW8H/F4Av8Se1Bl9lSpadqzdTcDiJFIiM9y9Xj8wm0S';
echo"<br><br>";
echo "DataBase  ...  ".$dbpwd3;
echo"<br><br>";
echo password_verify($password3,$dbpwd3); // not match hence output empty 
echo"<br><br>";

echo"<br>==================================================================";
echo"<br><br>";
$password4="HeLLo@UpaNANd#1234!";

echo "password 4 ...  ".$password4;

$dbpwd4='$2y$10$AprSEj24ZsNK7hgTeNNkruZSiycjML9XcD.dHb5xwSVBSplHgUF6C';

echo"<br><br>";
echo "DataBase  ...  ".$dbpwd4;
echo"<br><br>";
echo "password match hence output ".password_verify($password4,$dbpwd4); // password match hence output 1 
echo"<br><br>";
?>