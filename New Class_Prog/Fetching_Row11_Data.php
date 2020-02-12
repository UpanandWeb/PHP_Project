<?php
		//3rd Step connect to DB
$con=mysqli_connect("localhost","root","","contact_form")or die("unable to Connect DB");

		//4th Step Select the Data from DB
		
$resultSet=mysqli_query($con,"select * from employee_deatails");

?>

<html>
	<head>
		<title>Fetching Data from DB</title>

		<style>

			<!-- 2rd Step Design the Table in to DB -->
			
			table{
				border-collapse:collapse;
				
			}
			table tr:first-child{
				background:green;
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
	
	
	
	<h1>Fetching Data from DB</h1>

		<?php
		if(mysqli_num_rows($resultSet)>0)
			{
		
		?>
			<table>
				<tr>
					<th>Emp. No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>City</th>
					<th>Message</th>
					<th>Date of Join</th>
				</tr>
				

				<?php
		
				for( ;$row=mysqli_fetch_row($resultSet); )
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
				echo"<p>Sorry ! No Record Founds</p>";
			}
			?>														


			
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<!--5rd Step Display the Table in to DB 
	
			<h1>Fetching Data from DB</h1>

		if(mysqli_num_rows($resultSet)>0)
			{
				for( ;$rec=mysqli_fetch_row($resultSet); )
				{
				
				}
			}
			else
			{
				echo"<p>Sorry ! No Record Founds</p>";
			}
																	-->



		<!-- 1rd Step Create & Design the Table With Static Data for DB 

			<table>
				<tr>
					<th>Emp. No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>City</th>
					<th>Message</th>
					<th>Date of Join</th>
				</tr>
				<tr>
					<td>111</td>
					<td>Upanand</td>
					<td>Upanand@gmail.com</td>
					<td>9191</td>
					<td>Hyd</td>
					<td>Welcome</td>
					<td>29/11/2020</td>
				</tr>
				
				<tr>
					<td>222</td>
					<td>Upanand222</td>
					<td>Upanand22@gmail.com</td>
					<td>2229191</td>
					<td>222Hyd</td>
					<td>222Welcome</td>
					<td>29/12/2020</td>
				</tr>
			</table>                                      -->



	</body>

</html>