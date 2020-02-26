<html>
	<head>
		<title>Multiple File Uploading</title>
	</head>
	<body>
		<h1>Multiple File Uploading</h1>
		<form enctype="multipart/form-data" action="" method="POST">
			
			Upload File:
			<input type="file" name="profile[]" multiple>
			<br><br>
			<input type="submit" name="upload" value="Upload">
		</form>
	</body>
</html>
<?php 
if(isset($_POST['upload']))
{
	
	$c=count($_FILES['profile']['name']);
	for($i=0;$i<$c;$i++)
	{
		if(is_uploaded_file($_FILES['profile']['tmp_name'][$i]))
		{
			$filename=$_FILES['profile']['name'][$i];
			
			$type=$_FILES['profile']['type'][$i];
			
			$size=$_FILES['profile']['size'][$i];
			
			$tname=$_FILES['profile']['tmp_name'][$i];
			
			$arr=array("image/png","image/jpg","image/jpeg");
			
			if(in_array($type,$arr))
			{
				$str=substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),10,15);
				$newname=$str."_".$filename;
				if(move_uploaded_file($tname,"uploads/$newname"))
				{
					echo "<p>$filename is uploaded successfully</p>";
				}
			}
			else
			{
				echo "<p style='color:red'>$filename is not valid type</p>";
			}
			
		}
		else
		{
			echo "<p>Please select a file to upload</p>";
		}
	}
}
?>
