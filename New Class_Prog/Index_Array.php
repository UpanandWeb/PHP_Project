<pre>
<?php
echo"<br>===============Indexed Array=================<br>";
$ar1=array(10,20,30,40,
					array(50,60,70,
									array(100,200,300),
						),
		   );

print_r($ar1);
echo"<br>================================<br>";
print_r($ar1[2]);

echo"<br>=================================<br>";
print_r($ar1[4]);


echo"<br>=================================<br>";
print_r($ar1[4][1]);


echo"<br>=================================<br>";
print_r($ar1[4][3]);



echo"<br>=================================<br>";
print_r($ar1[4][3][1]);

?>