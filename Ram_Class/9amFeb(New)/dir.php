<?php 

$dp=opendir("images");
while($file=readdir($dp))
{
	if(!($file=="." || $file == ".."))
	{
		$arr=explode(".",$file);
		$ext=end($arr);
		if($ext=="png" || $ext=="jpg" || $ext=="jpeg")
		{
			echo "<img src='images/$file' height='100' width='100'>";
		}
	}
}




/*
$dir="js";
if(file_exists($dir))
{
	rmdir($dir);
	echo "<p>$dir is Deleted successfully</p>";
}
else
{
	echo "<P>$dir is Not exists</p>";
}
*/

?>