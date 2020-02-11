<?php
echo "<br>============Febonancci No.==========<br>";
$x=0;
$y=1;
$z;
$i=1;
while($i<=10)
{
	$z=$x+$y;
	echo "the Febonancci Series = ".$z."<br>";
	$x=$y;
	$y=$z;
	$i++;
}

echo "<br>=========Prime No.=============<br>";


$i=2;

while($i<=20)
{
	$j=2;
	while($j<$i)
	{
		if($i%$j==0)
		{
			break;
		}
		
		$j++;
	}
	
		if($i==$j)
		{
			echo "Prime No. = ".$i."<br>";
		}
	
	$i++;
}


echo "<br>=========Prime No.=============<br>";


for($num=1;$num<20;$num++)
{
$count=0;
    for ( $i=1;$i<=$num;$i++) {
        if (($num%$i)==0) {
            $count++;
        }
    }
    if ($count<3) {
	echo"<br>";
    echo $num." is a Prime number, ";

    }
}


echo "<br>=========Wrong Prime No.=============<br>";


$num = 1 ;
while ($num < 20 ) {
    $count=0;
    for ( $i=1;$i<=$num;$i++) {
        if (($num%$i)==0) {
            $count++;
        }
    }
    if ($count<3) {
	echo"<br>";
    echo $num." is a Prime number, ";

    } $num=$num+1;
}
?>