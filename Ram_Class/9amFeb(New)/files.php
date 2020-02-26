<html>
	<head>
		<title>File Uploading</title>
	</head>
	<body>
		<h1>File Uploading</h1>
		<form enctype="multipart/form-data" action="" method="POST">
			
			Upload File:
			<input type="file" name="profile">
			<br><br>
			<input type="submit" name="upload" value="Upload">
		</form>
	</body>
</html>
<?php 
if(isset($_POST['upload']))
{
	if(is_uploaded_file($_FILES['profile']['tmp_name']))
	{
		$filename=$_FILES['profile']['name'];
		$type=$_FILES['profile']['type'];
		$size=$_FILES['profile']['size'];
		$tname=$_FILES['profile']['tmp_name'];
		$arr=array("image/png","image/jpg","image/jpeg");
		if(in_array($type,$arr))
		{
			$str=substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),10,15);
			$newname=$str."_".$filename;
			if(move_uploaded_file($tname,"uploads/$newname"))
			{
				echo "<p>File Uploaded Successfully</p>";
			}
			else
			{
				echo "<p>Sorry! Unable to move a file. try again</p>";
			}
		}
		else
		{
			echo "<p>Please select a valid image to upload</p>";
		}
		
		/*echo $filename."<br>";
		echo $size."<br>";
		echo $type."<br>";
		echo $tname."<br>";*/
	}
	else
	{
		echo "<p>Please select a file</p>";
	}
}
?>
