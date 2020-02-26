<?php 
session_start();
if(isset($_SESSION['logintrue']))
{
	include("connect.php");
	include("menu.php");
	$uid = $_SESSION['logintrue'];
	$res=mysqli_query($con,"select password,profile_pic from register where uniid='$uid'");
	$row=mysqli_fetch_assoc($res);
	
	?>
		<h1>Change Password</h1>
		<?php 
		if($row['profile_pic']!="")
		{
			?>
			<img src="profiles/<?php echo $row['profile_pic'] ?>" height="100" width="100">
			<?php
		}
		
		?>
		<?php 
		if(isset($_COOKIE['success']))
		{
			echo "<p>".$_COOKIE['success']."</p>";
		}
		
		function filterData($data){
			$data = (isset($data))?$data:"";
			return addslashes(strip_tags(trim($data)));
		}
		if(isset($_POST['submit']))
		{
			$opwd  = filterData($_POST['opwd']);
			$npwd  = filterData($_POST['npwd']);
			
			
			$cnpwd  = filterData($_POST['cnpwd']);
			if(password_verify($opwd,$row['password']))
			{
				if($npwd===$cnpwd)
				{
					$npwd  = password_hash($npwd,PASSWORD_DEFAULT);
					
					mysqli_query($con,"update register set password='$npwd' where uniid='$uid'");
					if(mysqli_affected_rows($con)>0)
					{
						setcookie("success","Password updated successfully",time()+2);
						header("Location:change_pass.php");
					}
					else
					{
						echo "<p>Sorry! Unable to update the password</p>";
						echo mysqli_error($con);
					}
				}
				else
				{
					echo "<p>Passwords does not matched</p>";
				}
			}
			else
			{
				echo "<p>Sorry! Old Password does no matched with db password</p>";
			}
			
		}
	
		?>
		
		<form action="" method="POST">
			<Table>
				<tr>
					<td>Old Password</td>
					<td><input type="password" name="opwd"></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td><input type="password" name="npwd"></td>
				</tr>
				<tr>
					<td>Confirm New Password</td>
					<td><input type="password" name="cnpwd"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</form>
	<?php
}
else
{
	header("Location:login.php");
}
?>