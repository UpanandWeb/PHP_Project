
<?php 
session_start();
include("menu.php");
if(isset($_SESSION['logintrue']))
{
	include("connect.php");
	$uid = $_SESSION['logintrue'];
	$result = mysqli_query($con,"select *from register where uniid='$uid'");
	$row=mysqli_fetch_assoc($result);
	
	?>
	
		<h1>Welcome to <?php echo $row['username'];?>!</h1>
		<?php 
		if($row['profile_pic']!="")
		{
			?>
			<img src="profiles/<?php echo $row['profile_pic'] ?>" height="100" width="100">
			<?php
		}
		
		?>
		<table>
			<tr>
				<td>Id</td>
				<td><?php echo $row['id'];?></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><?php echo $row['username']; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $row['email'];?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php echo $row['gender'];?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo $row['address'] ?></td>
			</tr>
			<tr>
				<td>City</td>
				<td><?php echo $row['city'];?></td>
			</tr>
			<tr>
				<td>State</td>
				<td><?php echo $row['state'];?></td>
			</tr>
			<tr>
				<td>Joining Date</td>
				<td><?php echo date('l dS M Y',strtotime($row['doj'])); ?></td>
			</tr>
		</table>
	<?php
}
else
{
	header("Location:login.php");
}
?>