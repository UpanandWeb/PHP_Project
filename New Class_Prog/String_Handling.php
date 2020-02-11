<?php


echo"<br>============= String Handling() ===================<br>";

$name="HeLLo UpaNANd !";
echo strtolower($name);
echo"<br><br>";

$name1="how are you upanand !";
echo strtoupper($name1);
echo"<br><br>";

$name2="can i meet  you upanand , tomarrow !";
echo ucwords($name2);
echo"<br><br>";


$name3="thank you upanand , tomarrow !";
echo ucfirst($name3);
echo"<br><br>";

$name4="tHANK you upanand , tomarrow !";
echo ucfirst($name4);
echo"<br><br>";


$name5="BYE UpaNANd HAVE A GREAT DAY!";
echo ucwords(strtolower($name5));
echo"<br><br>";




echo"<br>============= String Handling strpos() ===================<br>";

echo "<br><br>";



$name6="HeLLo UpaNANd !"."<br><br>";
echo($name6);

echo"position "."a ";
echo strpos($name6,"a");
echo"<br><br>";

echo"position "."A ";
echo strpos($name6,"A");
echo"<br><br>";

echo"position "."N ";
echo strpos($name6,"N");
echo"<br><br>";



echo"<br>============= String Handling stripos() ===================<br>";

echo "<br><br>";

echo"position "."L ";
echo stripos($name6,"L");
echo"<br><br>";

echo"position "."a ";
echo stripos($name6,"a");
echo"<br><br>";


echo"position "."A ";
echo stripos($name6,"A");
echo"<br><br>";


echo stripos($name6,"N");
echo"<br><br>";

?>