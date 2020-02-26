<?php 
$password="Ram@1234                                  ";
$dbpwd='$2y$10$e7v/G9ZR6wx67Ns6CMVJwuslI8Y.Y.pHLlAgci0Rrt/QNPEXUV3g6';

echo password_verify($password,$dbpwd);



/*echo base64_encode($password);
echo "<br>";

$password="UmFtQDEyMzQ=";
echo base64_decode($password);
*/


//$str="1234567890";
//$otp=substr(str_shuffle($str),2,6);
//echo $otp;

/*$str="this is a java class";
echo str_replace("java","PHP",$str);
echo str_ireplace("jAVa","PHP",$str);
*/
//echo addslashes($name);//Ram\'s



/*$name="<h1><i>Ram</i></h1>";
echo strip_tags($name,'<i>');
*/

/*$str="hello this is php class from Naresh i technologies hyderabad";
echo str_word_count($str);
*/

/*$arr=array("Ram","Ravi","Nit");
echo implode(",",$arr);
*/
/*$str="hello this is php class from Naresh i technologies hyderabad";
echo substr($str,45);
echo substr($str,0,50);
*/
/*$email="rambabburi@gmail.com";
echo strpos($email,"@");//10
echo strpos($email,"a");//1
echo stripos($email,"M");//2
echo stripos($email,"L");//15
*/




/*
$name="RAM BABBURI";
echo ucwords(strtolower($name));
*/


//Ram Babburi
//echo ucfirst($name);
//echo ucwords($name);


?>