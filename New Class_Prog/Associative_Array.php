<pre>
<?php
echo"<br>===============Associative Array=================<br>";
$ar1=array("Name"=>"Upanand","City"=>"Hyd",'State'=>'TS',"Pincode"=>500038,
					
		   );

print_r($ar1);

echo"<br>================================<br>";
print_r($ar1["City"]);

echo"<br>=================================<br>";
print_r($ar1["Name"]);

echo"<br>=================================<br>";

echo"<br><br><br><br><br><br>";



echo"<br>===============Associative Index Array=================<br>";
$ar2=array("Name"=>"Upanand","10"=>"Hyd",'State'=>'TS',"Pincode"=>500038,
				1000,2000,3000,	
		   );

print_r($ar2);

echo"<br>================================<br>";

echo"<br>======================Mixed Array=========================<br>";
$ar2=array("Name"=>"Upanand","10"=>"Hyd",'State'=>'TS',"Pincode"=>500038,
				1000,2000,3000,	'Travel1'=>'NTR Garden','Travel2'=>'Golkonda',
								'Travel3'=>'RamujiCity','Travel4'=>'Charminar',5000,8000,
		   );

print_r($ar2);

echo"<br>================================<br>";
?>