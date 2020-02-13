<?php

$con=mysqli_connect("localhost","root","","contact_form")or die("Unable to Connect DB");

$resultSet=mysqli_query($con,"select * from employee_deatails");



?>

<html>
	<head>
		<title>Fetchoing Data Associative Array</title>
		<style>
		
		</style>
	</head>
	<body>
	<h1>Fetchoing Data Associative Array</h1>
	
	<?php
		if(mysqli_num_rows($resultSet)>0)
		{
			?>
			<table>
				<tr>
					<th>Emp. No.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>City</th>
					<th>Message</th>
					<th>Joining</th>
				</tr>
			<?php
			
				for(;$data=mysqli_fetch_assoc($resultSet);)
				{
				?>
				
				<tr>
					<td> <?php echo$data['Emp. No.']; ?> </td>
					<td> <?php echo$data['Name']; ?> </td>
					<td> <?php echo$data['email']; ?> </td>
					<td> <?php echo$data['Mobile_No.']; ?> </td>
					<td> <?php echo$data['City']; ?> </td>
					<td> <?php echo$data['Message']; ?> </td>
					<td> <?php echo$data['Datetime']; ?> </td>
				</tr>
				
				<?php
				}
			
			?>
			</table>
			
			<?php
		}
		else
		{
			echo"Sorry ! Unable to Found Records";
		}
	?>
	
	
	
	</body>

</html>
