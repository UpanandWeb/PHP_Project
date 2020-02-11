<?php
echo "<br>==============Table 5 ==============<br>";
$i=1;
while($i<=50)
{
	if($i%5==0)
	{
		echo$i."<br>";
	}	
	$i++;
}

echo "<br>==============Table 2-To-20 ===================<br>";

$j=2;

while($j<=20)
{
	$table;
	$table=$j;
	$k=1;
	while($k<=10)
	{
		echo $table."*".$k."=".$table*$k."<br>";
		$k++;
	}
	
	echo"<br>";
	$j++;
}

?>