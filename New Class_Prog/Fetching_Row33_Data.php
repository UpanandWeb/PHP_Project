<?php
$con=mysqli_connect("localhost","root","","contact_form")or die("Unable to Connect to DB");

$resultSet=mysqli_query($con,"select * from employee_deatails");

?>
<html>
	<head>
		<title>Fetching Data from DB</title>
		<style>
		
		</style>
	</head>
	<body>
	<h1>Fetching Data from DB</h1>
	<?php
	
		if(mysqli_num_rows($resultSet)>0)
		{
			?>
				<table>
					<tr>
						<th>Emp.ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>City</th>
						<th>Meassage</th>
						<th>Joining</th>
					</tr>
					<?php
					for(;$data=mysqli_fetch_row($resultSet);)
					{
						?>
						
							<tr>
								<td>    <?php  echo"$data[0]"; ?>	</td>
								<td>	<?php  echo"$data[1]"; ?>	</td>
								<td>	<?php  echo"$data[2]"; ?>	</td>
								<td>	<?php  echo"$data[3]"; ?>	</td>
								<td>	<?php  echo"$data[4]"; ?>	</td>
								<td>	<?php  echo"$data[5]"; ?>	</td>
								<td>	<?php  echo"$data[6]"; ?>	</td>
							</tr>
						
						
						<?php
					}
					?>
				</table>
			<?php
		}
		else
		{
			echo"Sorry ! Unable to Found Record ";
		}
	
	
	
	
	?>
	
		<h1>Fetching Data from DB</h1>
		<table>
			<tr>
				<th>Emp.ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>City</th>
				<th>Meassage</th>
				<th>Joining</th>
			</tr>
			<tr>
				<td>	</td>
				<td>	</td>
				<td>	</td>
				<td>	</td>
				<td>	</td>
				<td>	</td>
				<td>	</td>
			</tr>
		</table>
	</body>

</html>