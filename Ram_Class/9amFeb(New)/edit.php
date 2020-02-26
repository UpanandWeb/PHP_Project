<?php 
session_start();
if(isset($_SESSION['logintrue']))
{
	include("connect.php");
	include("menu.php");
	$uid = $_SESSION['logintrue'];
	$result = mysqli_query($con,"select *from register where uniid='$uid'");
	$row=mysqli_fetch_assoc($result);
	
	?>
		<h1>Edit Profile</h1>
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
			$uname = filterData($_POST['uname']);
			$mobile = filterData($_POST['mobile']);
			$addr = filterData($_POST['address']);
			$city = filterData($_POST['city']);
			$state = filterData($_POST['state']);
			mysqli_query($con,"update register set username='$uname',
			mobile='$mobile',
			address='$addr',
			city='$city',
			state='$state' where uniid = '$uid'");
			
			if(mysqli_affected_rows($con)>0)
			{
				setcookie("success","Profile updated successfully",time()+2);
				header("location:edit.php");
			}
			else
			{
				echo "<p>Sorry! Unable to update prfoile</p>";
				echo mysqli_error($con);
			}
			
		}
		
		?>
		
		<form method="POST" action="" onsubmit="return registerValidate()">
			<table border="1">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="uname" id="uname" value="<?php echo $row['username'];?>"></td>
				</tr>
				
				
				<tr>
					<td>Mobile:</td>
					<td><input type="text" name="mobile" id="mobile" value="<?php echo $row['mobile'];?>"></td>
				</tr>
				
				
				
				
				
				<tr>
					<td>Address:</td>
					<td><textarea name="address" id="address"><?php echo $row['address']?></textarea></td>
				</tr>
				
				<tr>
					<td>City:</td>
					<td><input type="text" name="city" id="city" value="<?php echo $row['city'];?>"></td>
				</tr>
				
				<tr>
					<td>State:</td>
					<td>
						<select name="state" id="state">
						<option value="">--Select State--</option>
						<option <?php if($row['state']=="Andhrapradesh") echo 'selected';?> value="Andhrapradesh">Andhrapradesh</option>
						<option <?php if($row['state']=="Telangana") echo 'selected';?> value="Telangana">Telangana</option>
						<option <?php if($row['state']=="Maharastra") echo 'selected';?> value="Maharastra">Maharastra</option>
						<option <?php if($row['state']=="Uttarpradesh") echo 'selected';?> value="Uttarpradesh">Uttarpradesh</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Update" name='submit'></td>
				</tr>
				
			</table>
		</form>
		<script>
			function registerValidate(){
				var uname = document.getElementById("uname").value;
			if(uname=="")
			{
				alert("Enter Username");
				return false;
			}
			else
			{
				if(uname.trim().length<4)
				{
					alert("Username should contains atleaset 4 characters in length");
					return false;
				}
			}
			/*Mobile Filed Validation*/
			var mob = document.getElementById("mobile").value;
			
			if(mob.trim()=="")
			{
				alert("Enter Mobile");
				return false;
			}
			else
			{
				if(mob.length!=10)
				{
					alert("Please Enter a 10 digit Mobile Number");
					return false
				}
				else if(isNaN(mob))
				{
					alert("Mobile number should contains only digits");
					return false;
				}
			}
			
		}
		</script>
	<?php
	
}
else
{
	header("Location:login.php");
}
?>