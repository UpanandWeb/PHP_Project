<?php
$con=mysqli_connect("localhost","root","","contact_form")or die("unable to Connect DB");
$resultSet=mysqli_query($con,"show tables");

?>
<html>
	<head>
	<title>Fetching Data from Table-DB</title>
	</head>
	<body>
	<h1>Fetching Data from Table-DB</h1>
	<?php
	
		if(mysqli_num_rows($resultSet)>0)
		{
			
			?>
			<form action="" method="POST">
				<select name="table" id="table">
					<option value="">--Select Table--</option>
					<?php
					
					while($row=mysqli_fetch_row($resultSet))
					{
					?>
					
					<option value="<?php  echo $row[0]; ?>" > <?php  echo $row[0]; ?> </option>
					
					<?php
					}
					?>
				</select>
				
				<input type="submit" value="Go" name='submit'>
				
			</form>
			
			<?php
			
				if(isset($_POST['submit']))
				{
					$tab=$_POST['table'];
					if(!empty($tab))
					{
						$data=mysqli_query($con,"select * from $tab");
						if(mysqli_num_rows($data)>0)
						{
							
							?>
							<table>
											<tr>
												<?php
													while($col=mysqli_fetch_field($data))
													{
														?>
														<th <?php echo ucfirst($col->name); ?> > </th>
																										
														<?php
													}
													
												?>
											</tr>	
									
									<?php
									while($rec=mysqli_fetch_assoc($data))
										{
											?>
											<tr>
												<?php
												$cols=mysqli_fetch_fields($data);
												for($i=0;$i<count($cols);$i++)
												{
													?>
													<td> <?php echo $rec[$cols[$i]->name]; ?></td>
													
													<?php
												}
												?>
											</tr>
											<?php
										}										
									
									?>
							</table> 
							<?php
							
						}
						
						
						
						
					}	
					else
					{
						echo"<p> Sorry! No Records Founds</p>";
					}
				}
				
				else
				{
					echo"<p>Please Select the table for Procedure</p>";
				}
		}
		else
		{
			echo"<p> Sorry! No table Found </p>";
		}
	
	
	
	?>
	
	
		<!--<h1>Fetching Data from Table-DB</h1>
		<form>
			<select>
				<option>--Select Table--</option>
				<option>--employee_deatails--</option>
				<option>--signup--</option>
				<option>--student_info--</option>
			</select>
			<input type="submit" value="Go" name="submit">
		</form> -->
	</body>
</html>