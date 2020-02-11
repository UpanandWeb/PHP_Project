<?php
echo "<br>==============Table 5 ==============<br>";
$i=1;
do{
	if($i%5==0)
	{
		echo$i."<br>";
	}
	$i++;
}while($i<=50);

echo "<br>==============Table 2-To-20 ===================<br>";

$j=2;
do{
	$table;
	$table=$j;
	$k=1;
	do{
		echo $table."*".$k."=".$table*$k."<br>";
		$k++;
	}while($k<=10);	
	
	$j++;
	echo"<br>";
}while($j<=20);

?>