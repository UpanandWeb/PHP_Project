
<html>
<head>
	<title>Upload Data_File</title>
</head>
<body>
			<h1>Upload Data_File</h1>
				<form enctype="multipart/form-data"  action="" method="POST" >
					 Username <br>
					<input type="text" name="username">
					<br><br><br>
					 Email <br>
					<input type="text" name="mail">
					<br><br><br>
					Mobile<br>
					<input type="text" name="mobile">
					<br><br><br>
					Doc. Upload <input type="file"  name="profile">
					
					<br><br><br>
					<input type="submit" value="Upload" name="upload">
				</form>
				
				

</body>
</html>


<?php


echo"<br>==================================================================<br>";
 
 /* if(Count($_POST)>0)
 {
		$name=$_POST["username"];
		$mail=$_POST["mail"];
		$mob=$_POST["mobile"];

		echo "USERNAME "."$name"."<br>";

		echo "EMAIL "."$mail"."<br>";

		echo "MOBILE NO. "."$mob"."<br>";
 } */
echo"<br>==================================================================<br>";


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
				$newname=$str." ".$filename;
					if(move_uploaded_file($tname,"uploads/$newname"))
					{
						echo"<p>File Uploaded Succesfully</p>";
										
					}
					else
					{
						echo"<p>Sorry Unable To Move File Try Again</p>";
					}
			}		
			else
			{	
				echo"<p>Please Select a Valid Images to Upload</p>";
			}
			
			echo $filename."<br>";
			echo $size."<br>";
			echo $type."<br>";
			echo $tname."<br>";
			
		}
		else
		{
			echo"<p>Please Select a File to Upload</p>";
		}
		
}

?>