<?php





	function add()
	{
				
			$x=300;
			$y=200;
			$z=$x+$y;
		echo "Addition of Number  "."$z";
	}

add();


echo"<br>==================================================================<br>";

$x=100;
$y=200;
	function add1()
	{
		$z=$GLOBALS['x']+$GLOBALS['y'];
		echo "Addition of Number  "."$z";
	}

add1();


echo"<br>==================================================================<br>";



?>