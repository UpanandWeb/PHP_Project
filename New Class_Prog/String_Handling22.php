<?php



echo"<br>============= String Handling str_replace() ===================<br>";

$str="HeLLo UpaNANd !";
echo str_replace("HeLLo","Hi",$str);
echo"<br><br>";

$str1="how are you upanand !";
echo str_replace("upanand","SAGAR",$str1);
echo"<br><br>";

$str2="can i meet  you upanand , tomarrow !";
echo str_replace("can i","Please We ",$str2);
echo"<br><br>";

echo"<br>============= String Handling str_ireplace() ===================<br>";

$str3="HeLLo UpaNANd !";
echo str_ireplace("UPANAND",", Hi HandSome",$str3);
echo"<br><br>";

$str4="how are you upanand !";
echo str_ireplace("UPAnanD","SaGaR",$str4);
echo"<br><br>";

$str5="can i meet  you upanand , tomarrow !";
echo str_ireplace("CaN I","Please We ",$str5);
echo"<br><br>";


echo"<br>================================<br>";


echo"<br>============= String Handling addslashes() ===================<br>";

$str3="HeLLo UpaNANd's !";
echo addslashes($str3);
echo"<br><br>";

$str4="how's are you's upanand !";
echo addslashes($str4);
echo"<br><br>";

$str5="can i meet\'s  you upanand\'s , tomarrow\'s !";
echo stripslashes($str5);
echo"<br><br>";




?>