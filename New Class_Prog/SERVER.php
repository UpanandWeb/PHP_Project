<pre>
<?php

echo"<br><br>==========================  REMOTE_ADDR ========================================<br><br>";

$Ip=$_SERVER['REMOTE_ADDR'];
echo $Ip;
echo "<br>"."Mean's 127.0.0.1 "; //Local Host =127.0.0._________

echo"<br><br>==========================  HTTP_USER_AGENT  ========================================<br><br>";

echo $_SERVER['HTTP_USER_AGENT'];

echo"<br><br>==========================   SERVER_NAME  ========================================<br><br>";

echo $_SERVER['SERVER_NAME'];

echo"<br><br>===========================   SERVER_PROTOCOL  =======================================<br><br>";

echo $_SERVER['SERVER_PROTOCOL'];

echo"<br><br>==========================  SERVER_PORT  ========================================<br><br>";

echo $_SERVER['SERVER_PORT'];

echo"<br><br>==========================  PHP_SELF  ========================================<br><br>";

echo $_SERVER['PHP_SELF'];

echo"<br><br>=========================  SCRIPT_FILENAME  =========================================<br><br>";

echo $_SERVER['SCRIPT_FILENAME'];

echo"<br><br>=======================  DOCUMENT_ROOT  ===========================================<br><br>";

echo $_SERVER['DOCUMENT_ROOT'];

echo"<br><br>==================================================================<br><br>";

?>