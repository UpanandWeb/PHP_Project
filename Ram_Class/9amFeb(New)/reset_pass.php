<?php 
if(isset($_GET['token']) && !empty($_GET['token']))
{	
	include("connect.php");
	$uid=$_GET['token'];
	$res=mysqli_query($con,"select uniid from register where uniid='$uid'");
	if(mysqli_num_rows($res)==1)
	{
		?>
			<html>
				<head>
					<title>Reset Password</title>
					<style></style>
				</head>
				<body>
					<h1>Reset Password</h1>
			<?php 
			function filterData($data){
				$data = (isset($data))?$data:"";
				return addslashes(strip_tags(trim($data)));
			}
			
			if(isset($_POST['submit']))
			{
				$pwd=filterData($_POST['pwd']);
				$cpwd=filterData($_POST['cpwd']);
				if($pwd == $cpwd)
				{
					$pwd = password_hash($pwd,PASSWORD_DEFAULT);
					mysqli_query($con,"update register set password='$pwd' where uniid='$uid'");
					if(mysqli_affected_rows($con)>0)
					{
						setcookie("success","Password updated successfully. Login now",time()+2);
						header("Location:login.php");
					}
					else
					{
						setcookie("error","Unable to update reset password, Contact admin.",time()+2);
						header("Location:login.php");
					}
				}
				else
				{
					echo "<p>Sorry! Passwords does not matched...</p>";
				}
			}
			
			?>
		<form method="POST" action="">
			<table>
				<tr>
					<td>Enter New Password</td>
					<td><input type="password" name="pwd" id="pwd"></td>
				</tr>
				<tr>
					<td>Confirm New Password</td>
					<td><input type="password" name="cpwd" id="cpwd"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</form>
				</body>
			</html>
		<?php
	}
	else{
		echo "Sorry! Unable to process your request";
	}
}
else
{
	echo "Sorry! Unable to process your request";
}
?>