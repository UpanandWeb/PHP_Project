<?php
session_start();
$con=mysqli_connect("localhost","root","","contact_form")or die("unable to connect to DB");


?>
<html>
	<head>
		<title>Login Page</title>
		<style>
			table{ table-collapse:collapse;
					border:none;}
			table tr th {padding:10px;}
		</style>
	</head>
	<body>
		<h1>Login</h1>
		<?php
		if(isset($_POST['login']))
		{
			//4.1 collect form data with filter
			$email=filterData($_POST['email']);
			$pwd=filterData($_POST['pwd']);
			
			//4.3 Verify the credential
			
			$res=mysqli_query($con,"select * from register where email='$email'");
			if(mysqli_num_rows($res)==1)
			{
				$row=mysqli_fetch_assoc($res);
				if(password_verify($pwd,$row['password']))
				{
					if($row['status']=="active")
					{
							$_SESSION['logintrue']=$row['uniid'];
							header("location:home.php");
					}
					else
					{
						echo"<p>Please activate your account </p>";
					}
				}
				else
				{
					echo"<p>Sorry! Wrong Password Entered</p>";
				}
				
			}
			else
			{
				echo"<p>Sorry! Wrong Email Entered</p>";
			}
					
			
		}
					function filterData($data)
					{
					$data = (isset($data))?$data:"";
					return addslashes(strip_tags(trim($data)));
					}
		
		?>
		<form action="" method="POST" onsubmit="loginvalidate()">
			<table border="1">
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" id="email"> </td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pwd" id="pwd"> </td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="login" value=" Login "><a href="">Forget Password</a> </td>
				</tr>
				
			</table>
		</form>
	</body>
	<script>
	function loginvalidate()
	{
		// Email Field Validation
			var mail=document.getElementById("email").value;
			if(mail.trim()=="")
			{
				alert("please Enter Email");
				return false;
			}
			else
			{
				var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if(!mail.match(mailformat))
				{
					alert("Please Enter Valid Email");
					return false;
				}
			}
			
				// password Field Validation
			
			var pwd=document.getElementById("pwd").value;
			if(pwd.trim()=="")
			{
				alert("Please Enter Password");
				return false;
			}
			else
			{
				if(pwd.legnth<3)
				{
					alert("Password should Contains atlest 6 character in Length");
					return false;
				}
			}
			
			
			
	}
	
	</script>
</html>