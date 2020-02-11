<pre>
<?php

echo"<br>================================<br>";

echo "added value in to last Position then display <br> ";

$arr2=[10,70,40,60,50];


echo array_push($arr2,300);
echo "<br> ";

print_r($arr2); //Return Elements No.

echo"<br>================================<br>";

echo "added value in to first Position then display <br> ";

$arr3=[10,70,40,60,50,20];

echo array_unshift($arr3,200);

echo "<br> ";

Print_r($arr3);


echo"<br>================================<br>";

echo "Removing value in to last Position => display <br> ";

$arr4=[10,70,40,60,50];

echo array_pop($arr4);

echo "<br> ";
Print_r($arr4); //Return Elements No.

echo"<br>================================<br>";

$arr5=[10,70,40,60,50,110];

echo "Removing value in to First Position => display <br> ";

echo array_shift($arr5);

Print_r($arr5);


echo"<br>================================<br>";

$arr6=[10,70,40,60,50];

echo "Removing value in to any Position => display <br> ";

unset($arr6[2]);

Print_r($arr6);


echo"<br>================================<br>";


?>