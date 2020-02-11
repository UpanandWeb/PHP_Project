<?php
// Way to Declaration

$x=100;
$y=200;
$z=$x+$y;

echo "<br>";  echo "Value of X =","$x";
echo "<br>";  echo "Value of Y =","$y";
echo "<br>";  echo "Add of X & Y =","$z";

$p=true;
$q=false;

echo "<br>";  echo "boolean Value of p =","$p";
echo "<br>";  echo "boolean Value of q =","$q";

$z=$x+$p;
echo "<br>";  echo "Add boolean Value in digit(100+1)  =","$z";
$z=$x*$q;
echo "<br>";  echo "Mul boolean Value in digit(100*0)  =","$z";

$x=100;
$y="Hello";

// echo "<br>";  echo "Add Value & Digit  =",$x+$y;    // Integer Doesnot Added in String

echo "<br>";  echo "Add Value & Digit  =","$x+$y";  //String Added

$name="PHP";
$PHP="Traning";
echo "<br>";  echo " Value of  =",$$name;  



?>