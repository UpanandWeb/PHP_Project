<pre>
<?php
echo"<br>===============Indexed For_Loop Array=================<br>";
$ar1=array(10,20,30,40,50,60,70,80,90,);

print_r($ar1);

echo"<br>============Print Index====================<br>";

for($i=0;$i<10;$i++)
{
	echo $i;
	echo "<br>";
}


echo"<br>=============Print Values====================<br>";


for($j=0;$j<10;$j++)
{
	echo $ar1[$j];
	echo "<br>";
}


echo"<br>==============Using Count===================<br>";

$ar2=array(1000,2000,3000,4000,5000,6000,7000,8000,9000,);
$n=count ($ar2);
for($k=0;$k<$n;$k++)
{
	echo $ar2[$k];
	echo "<br>";
}

echo"<br>=================================<br>";




?>