<?php 
session_start();
if(isset($_SESSION['logintrue']))
{
	$uid = $_SESSION['logintrue'];
	include("connect.php");
	include("menu.php");
	?>
		<h1>Upload Avatar</h1>
		
		<?php 
		if(isset($_POST['upload']))
		{
			if(is_uploaded_file($_FILES['avatar']['tmp_name']))
			{
				$filename = $_FILES['avatar']['name'];
				$tname = $_FILES['avatar']['tmp_name'];
				$str=substr(str_shuffle("abcdfefghijklmnopqrstuvwxyz"),10,15);
				
				$newname=$str."_".time()."_".$filename;
				
				$type = $_FILES['avatar']['type'];
				if($type=="image/jpeg" || $type=="image/jpg" || $type=="image/png")
				{
					if(move_uploaded_file($tname,"profiles/$newname"))
					{
						mysqli_query($con,"update register set profile_pic ='$newname' where uniid = '$uid'");
						if(mysqli_affected_rows($con)>0)
						{
							echo "<p>Avatar Uploaded successfully</p>";
						}
					}
					else
					{
						echo "<p>Sorry! Unable to update the image. Try again</p>";
					}
				}
				else
				{
					echo "<p>Please select a valid image of type .png, .jpg, .jpeg</p>";
				}
				
			}
			else
			{
				echo "<p>Please select an image to upload.</p>";
			}
		}
		?>
		
		<form method="POST" action="" enctype="multipart/form-data">
			Upload Avatar:<br>
			<input type="file" name="avatar"><br><br>
			<input type="submit" name="upload" value="Upload">
		</form>
	<?php
}
else
{
	header("Location:login.php");
}
?>