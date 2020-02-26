<?php 
// 3rd step
$con = mysqli_connect("localhost","root","","9am") or die("Unable to Connect");

// 4th step
$resultSet=mysqli_query($con,"show tables");

if(mysqli_num_rows($resultSet)>0)
{
	?>
		<form method="POST" action="">
		<select name="table" id="table">
			<option value="">--Select Table--</option>
			<?php 
			while($row=mysqli_fetch_row($resultSet))
			{
				?>
				<option value="<?php echo $row[0];?>"><?php echo $row[0]; ?></option>
				<?php
			}
			?>
			
		</select>
		<input type="submit" value="Go" name="submit">
		</form>
	<?php
	
	if(isset($_POST['submit']))
	{
		$tab=$_POST['table'];
		if(!empty($tab))
		{
			$data=mysqli_query($con,"select *from $tab");
			if(mysqli_num_rows($data)>0)
			{
				?>
				<table>
					<tr>
						<?php 
						while($col=mysqli_fetch_field($data))
						{
							?>
							<th><?php echo ucfirst($col->name);?></th>
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
							<td><?php echo $rec[$cols[$i]->name];?></td>
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
			else
			{
				echo "<p>Sorry! No records found in $tab Table</p>";
			}
			
		}
		else
		{
			echo "<p>Please select a table to process...</p>";
		}
	}
	
}
else
{
	echo "<p>Sorry! No Tables Found</p>";
}
?>