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
			
			<?php
			while($row=mysqli_fetch_row($data))
			{
				?>
						<input type="checkbox" value=" <?php echo $row[0];  ?>">
						<?php echo $row[0];  ?>
						
						
				
				<?php
			}
			
			?>
			
				<input type="submit" value="Go" name="submit">
				
			</form>
			
			<?php			
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
	
	
	
		<h1>Feching Table in CheckBox from DB</h1>
		<form action="" method="POST">
			<input type="checkbox">Table11
			<input type="checkbox">Table22
			<input type="submit" value="Go" name="submit">
		</form>                                                      
		
		
		<h1>Feching Table in radio from DB</h1>
		<form action="" method="POST">
			<input type="radio" name="display">Table11
			<input type="radio" name="display">Table22
			<input type="submit" value="Go" name="submit">
		</form>
		
		 /*
						
						<input type="radio" name="name" value=" <?php echo $row[0];  ?>">
						<?php echo $row[0];  ?>
															*/
	
	
	
	?>
	
	