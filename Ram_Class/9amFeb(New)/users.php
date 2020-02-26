<?php 
// 3rd step
$con = mysqli_connect("localhost","root","","9am") or die("Unable to Connect");

// 4th step
$resultSet=mysqli_query($con,"select * from enquiry");


?>
<html>
	<head>
		<title>Users List</title>
		<style>
			/* 2nd Step*/
			table{
				border-collapse:collapse;
			}
			table tr:first-child{
				background:green;
			}
			table tr th{
				color:#fff;
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
		<h1>Users List</h1>
		<?php 
		if(mysqli_num_rows($resultSet)>0)
		{
			?>
			<table border="1" cellpadding="10">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Message</th>
				<th>City</th>
			</tr>
			<?php 
			while($row=mysqli_fetch_row($resultSet))
			{
				?>
			<tr>
				<td><?php echo $row[0]; ?></td>
				<td><?php echo $row[1];?></td>
				<td><?php echo $row[2]; ?></td>
				<td><?php echo $row[3]; ?></td>
				<td><?php echo $row[4]; ?></td>
				<td><?php echo $row[5]; ?></td>
				
			</tr>
				<?php
			}
			?>
		</table>
			<?php
		}
		else
		{
			echo "<p>Sorry! No Records to display</p>";
		}
		?>
	</body>
</html>