<pre>
<?php


$fp=fopen("Hi.txt","r");

echo $fp ;

echo"<br>==================================================================<br>";

$fp=fopen("Hello.txt","w");

echo fwrite($fp,"how are You ") ;


echo"<br>==================================================================<br>";


$fp=fopen("Good_Evining.txt","w");

echo fwrite($fp,"how are You ") ;

echo $fp ;



echo"<br>==================================================================<br>";


$fp=fopen("Good.txt","a");

echo fwrite($fp,"how are You ") ;

echo $fp ;


echo"<br>==================================================================<br>";

$fp=fopen("Hi.txt","r");

$size=filesize("Hi.txt");

echo fread($fp,$size);

echo "  The Size Of Hi.txt  ".$size;

echo"<br>==================================================================<br>";

$size=filesize("Hi.txt ");

echo "  The Size Of Hi.txt  ".$size;

echo"<br>==================================================================<br>";


$size=filesize("Array.php ");

echo "  The Size Of Array.php  ".$size;


echo"<br>==================================================================<br>";


echo file_exists("Array.php");

echo "  The file_exists Array.php  "; //File


echo"<br>==================================================================<br>";


echo file_exists("Images ");

echo "  The Does not file_exists Images "; //Directory 

echo"<br>==================================================================<br>";


echo file_exists("Hi.txt");

echo "  The file_exists Hi.txt ";  //Files

echo"<br>==================================================================<br>";




echo "<br><br><br>";
echo"<br>==================================================================<br>";

date_default_timezone_set("asia/kolkata");

echo date(" Y-m-d h:i:s A", strtotime("2 days 1 year"));





?>