<?php

for($i=1;$i<=50;$i++)
{
	if($i%5==0)
	{
		echo $i,"<br>";
	}
}

echo "<br><br>";


for($j=2;$j<=20;$j++)
{
		$table=$j;

		for($i=1;$i<=10;$i++)
		{
			echo $table."*".$i."=".$table*$i."<br>";
		}
	echo"<br>";
}
?>