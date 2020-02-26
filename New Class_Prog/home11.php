<?php
session_start();
$con=mysqli_connect("localhost","root","","contact_form")or die("unable to Connect to DB");

if(isset($_SESSION['logintrue']))
{
	$id=$_SESSION['logintrue'];
	$result=mysqli_query($con,"select * from register when $uniid='$id'");
	$row=mysqli_fetch_assoc($result);
	?>
	
		<html>
			<head>
			
			</head>
			<body>
					<h1> Welcome  to Home Page</h1>
					
					<br><br><br><br>
					<ul>
					<li><a href="home.php">Profile</a></li>
					<li><a href="edit.php">Edit Profile</a></li>
					<li><a href="avatar.php">Upload Avatar</a></li>
					<li><a href="change_pass.php">Change Password</a></li>
					<li><a href="login.php">Log Out</a></li>
					</ul>
					<br><br><br><br>
					
					<h1> Welcome  to <?php $row['username']; ?></h1>
					
					<br><br>
					<form>
					<table>
						<tr>
							<td>Name</td>
							<td><?php  echo$row['username'];  ?></td>
						</tr>
						
						<tr>
							<td>Email</td>
							<td><?php  echo$row['email'];  ?></td>
						</tr>
						
						<tr>
							<td>Name</td>
							<td><?php  echo$row['username'];  ?></td>
						</tr>
						
						<tr>
							<td>Gender</td>
							<td><?php  echo$row['gender'];  ?></td>
						</tr>
						
						
						<tr>
							<td>Address</td>
							<td><?php  echo$row['addr'];  ?></td>
						</tr>
						
						<tr>
							<td>City</td>
							<td><?php  echo$row['city'];  ?></td>
						</tr>
						
						<tr>
							<td>State</td>
							<td><?php  echo$row['state'];  ?></td>
						</tr>
						
						<tr>
							<td>Date of Joining</td>
							<td><?php  echo$date('l  M Y',strtotime($row['doj']));  ?></td>
						</tr>
					</table>
					</form>
			</body>
		</html>


	<?php
}
else
{
	header("Location:login.php");
}

?>