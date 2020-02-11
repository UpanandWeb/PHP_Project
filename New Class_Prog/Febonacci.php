<?php


$x=0;
$y=1;
$z;
$i;
$num=20;

for($i=0;$i<=$num;$i++)
{
	echo"<br>";
	$z=$x+$y;
	echo" The Febonacci Number is ".$z;
	$x=$y;
	$y=$z;
}




// https://www.javatpoint.com/prime-number-program-in-c

echo"<br>","<br>";

for($i=2;$i<=20;$i++)
{
	for($j=2;$j<$i;$j++)
	{
		if($i%$j==0)
		{
			break;
		}
	}
	
	if($i==$j)
	{
		echo $i."  Is a Prime No. <br>";
	}

}


echo"<br>","<br>";
 
 $x=20;
 $y=0;  

 for($i=1;$i<=50;$i++) 
 {
	 if($i%2!=0&&$i%3!=0&&$i%4!=0&&$i%5!=0)    
	 {
		 echo"<br>";
		 echo ("$i is a Prime number");
	 }
	
  }
 
echo"<br>";
echo"<br>";
echo"<br>";

$num = 1 ;
while ($num < 50 ) {
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

echo"<br>";
echo"<br>";
echo"<br>";


for($num=1;$num<50;$num++)
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
?>