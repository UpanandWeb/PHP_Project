<?php

$con=mysqli_connect("localhost","root","","contact_form")or die("Unable to connect DB");

$resultSet=mysqli_query($con,"select * from employee_deatails");

?>
<html>
	<head>
		<title>Fetching Array Data from DB</title>
	</head>
	<body>
	<h1>Fetching Array Data from DB</h1>
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
							<th>Message</th>
							<th>Joining</th>
						</tr>
			<?php
			for(;$ross=mysqli_fetch_array($resultSet);)
				{					
					?>
					<tr>
						<td> <?php  echo"$ross[0]";?></td>
						<td> <?php  echo"$ross[1]";?></td>
						<td> <?php  echo"$ross[2]";?></td>
						<td> <?php  echo"$ross[3]";?></td>
						<td> <?php  echo"$ross[4]";?></td>
						<td> <?php  echo"$ross[5]";?></td>
						<td> <?php  echo"$ross[6]";?></td>
					</tr>
					<?php
				}				
				
			?>
				</table>
				
			<?php
		}
		else
		{
			echo"Sorry ! Unable To Found Records";
		}
	
	?>
	
		<h1>Fetching Array Data from DB</h1>
		<table>
			<tr>
				<th>Emp.ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>City</th>
				<th>Message</th>
				<th>Joining</th>
			</tr>
			<tr> <?php  echo" ";?></tr>
		</table>
	
	</body>

</html>