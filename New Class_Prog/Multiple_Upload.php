
<html>
<head>
	<title>Multiple Upload Data_File</title>
</head>
<body>
			<h1>Multiple Upload Data_File</h1>
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
					Multiple Doc. Upload <input type="file"  name="profile[]" multiple>
					
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
				$newname=$str." ".$filename;
					if(move_uploaded_file($tname,"uploads/$newname"))
					{
						echo"<p>$filename    <--  File Uploaded Succesfully</p>";
										
					}
					else
					{
						echo"<p>$filename    <--  Sorry Unable To Move File Try Again</p>";
					}
			}		
			else
			{	
				echo"<p>$filename    <-- Please Select a Valid Images to Upload</p>";
			}
			/*
			echo $filename."<br>";
			echo $size."<br>";
			echo $type."<br>";
			echo $tname."<br>";
			*/
		}
		else
		{
			echo"<p>$filename    <--  Please Select a File to Upload</p>";
		}
			
			
			
		}
		
}

?>