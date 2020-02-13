<?php
$con=mysqli_connect("localhost","root","","contact_form")or die("unable to connect DB");

$data=mysqli_query($con,"select * from employee_deatails");


?>
<html>
	<head>
		<title>For Practices</title>
		<style>
		table{
				border-collapse:collapse;
				
			}
			table tr:first-child{
				background:red;
			}
			table tr th {
				color:#fff;
				font-size:18px;
				padding:10px;
			}
			table tr{
				background-color:#d4d4d4;
			}
			
			table tr:hover{
				background-color:#efefef;
			}
			
		</style>
	</head>		
	<body>
	
	<?php
		if(mysqli_num_rows($data)>0)
		{
			?>
			
				<table>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>City</th>
						<th>Message</th>
						<th>Date of Join</th>
					</tr>
			
					<?php
												
							for( ;$row=mysqli_fetch_row($data); )
							{
								
							?>
							
							<tr>
								<td><?php  echo $row[0]; ?></td>
								<td><?php  echo $row[1]; ?></td>
								<td><?php  echo $row[2]; ?></td>
								<td><?php  echo $row[3]; ?></td>
								<td><?php  echo $row[4]; ?></td>
								<td><?php  echo $row[5]; ?></td>
								<td><?php  echo $row[6]; ?></td>
							</tr>
							
						<?php
					}
					?>
				</table>
			<?php
			
		}
		else
		{
			echo "Sorry! Unable to Find Record";
		}
	
	?>
	
	
		<h1>Fetching Data From DB</h1>
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>City</th>
				<th>Message</th>
				<th>Date of Join</th>
			</tr>
			<tr>
				<td>   </td>
				<td>   </td>
				<td>   </td>
				<td>   </td>
				<td>   </td>
				<td>   </td>
			</tr>
		</table>
	
	</body>
</html>