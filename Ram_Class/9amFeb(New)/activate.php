<?php 
if(isset($_REQUEST['token']) && !empty($_REQUEST['token']))
{
	$uniid = $_REQUEST['token'];
	include("connect.php");
	
	$res = mysqli_query($con,"select *from register where uniid='$uniid'");
	if(mysqli_num_rows($res)==1)
	{
		$row=mysqli_fetch_assoc($res);
		if($row['status']=='inactive')
		{
			mysqli_query($con,"update register set status='active' where uniid='$uniid'");
			if(mysqli_affected_rows($con))
			{
				echo "<p>Account Activated successfully. Please Login</p>";
			}
		}
		else
		{
			echo "<p>Your account is already activated</p>";
		}
		
	}
	else
	{
		echo "Sorry! User not found to activate the account";
	}
}
else
{
	echo "<p>Sorry! Unable to process your request</p>";
}

?>