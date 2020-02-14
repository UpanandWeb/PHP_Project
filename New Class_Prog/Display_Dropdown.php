<?php

$con=mysqli_connect("localhost","root","","contact_form")or die("Unable to Connect DB");

$data=mysqli_query($con,"show tables");



?>


<html>
	<head>
	
	</head>
	<body>
	<h1>Feching Table in DropDown from DB</h1>
	<?php
	
	
		if(mysqli_num_rows($data)>0)
		{
			?>
			
			<form action="" method="POST">
				<select name="table" id="table">
				<option value="">--Select DB--</option>
			
			
			<?php
			while($row=mysqli_fetch_row($data))
			{
				?>
				
				<option value=" <?php echo $row[0];  ?>"><?php echo $row[0];  ?> </option>	
				
				<?php
			}
			
			?>
			
				</select>
				<input type="submit" value="Go" name="submit">
			</form>
			
			
			<?php	


			if(isset($_POST['submit'])) 
			{
				
			}
			else
			{
				echo"<p>Please Select the table for Procedure</p>";
			}

			
		}
		else
		{
			echo "Sorry! unable to find Table";
		}

	
	
	
	/*
	
	<h1>Feching Table in DropDown from DB</h1>
		<form action="" method="POST">
			<select>
			<option>--Select DB--</option>
			<option>--contact_form--</option>
			<option>--signup--</option>
			</select>
			<input type="submit" value="Go" name="submit">
		</form>
	
	*/
	
	
	?>
	
	