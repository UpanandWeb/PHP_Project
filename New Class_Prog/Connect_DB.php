<pre>
<?php
$con=mysqli_connect("localhost","root","","contact_form")or die("unable to Found");
print_r($con);

echo"<br>";
echo"<br>================================================================<br>";


/* another Way to connect To Database

	$con=mysqli_connect("localhost","root","")or die("unable to Found");
	mysqli_select_db($con,"contact_form");
	print_r($con); 
*/
echo"<br>";
echo"<br>================================================================<br>";

/*  another Way to connect To Database

		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully"; 

*/
?>