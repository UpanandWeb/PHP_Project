<?php

$con=mysqli_connect("localhost","root","","contact_form")or die("unable to Connect DB");

$ross=mysqli_query($con,"select * from employee_deatails");

?>

<html>
	<head>
		<title>Fetching Object Data from DB</title>
	</head>
	<body>
		</h1>Fetching Object Data from DB</h1>
		<?php
		
		if(mysqli_num_rows($ross)>0)
		{
			?>
			<table>
				<tr>
					<th>Emp. ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>City</th>
					<th>Message</th>
					<th>Joining</th>
				</tr>			
			<?php
			for(;$data=mysqli_fetch_object($ross);)
			{
				?>				
				<tr>
					<td> <?php echo "$data->Emp. No.";  ?></td>
					<td> <?php echo "$data->Name";  ?></td>
					<td> <?php echo "$data->email;"  ?></td>
					<td> <?php echo "$data->Mobile_No.";  ?></td>
					<td> <?php echo "$data->City";  ?></td>
					<td> <?php echo "$data->Message";  ?></td>
					<td> <?php echo "$data->Datetime";  ?></td>
				</tr>
				<?php
			}
			?>						
			</table>
			<?php
		}
		else
		{
				echo"Sorry! No Record Founds in Table";
		}
		
		
		?>
		
		
		</h1>Fetching Data from DB</h1>
		<table>
			<tr>
				<th>Emp. ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>City</th>
				<th>Message</th>
				<th>Joining</th>
			</tr>
			<tr>
				<td> <?php echo" ";  ?></td>
			</tr>
		</table>
	</body>
</html>