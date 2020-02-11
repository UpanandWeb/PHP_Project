<?php

echo "<br>============Febonancci No.==========<br>";

$x=0;
$y=1;
$z;
$i=1;
do{
	$z=$x+$y;
	echo "the Febonancci Series = ".$z."<br>";
	$x=$y;
	$y=$z;
	
	$i++;
}while($i<20);

echo "<br>=========Prime No.=============<br>";

$j=2;
do{
	$k=2;
	do{
		if($j%$k==0)
		{
			break;
		}
		$k++;
	}while($k<$j);
	if($j==$k)
	{
		echo "Prime No. = ".$j."<br>";
	}
	$j++;
	
}while($j<50);

?>