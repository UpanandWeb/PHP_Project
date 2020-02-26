<?php 

$x=100;
$y=300;
function add()
{
	$z=$GLOBALS['x']+$GLOBALS['y'];
	echo $z;
}
add();

?>