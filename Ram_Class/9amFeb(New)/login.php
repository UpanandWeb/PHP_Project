<?php session_start();
include("connect.php");
?>
<html>
	<head>
		<title>Login</title>
		<style>
		/*2nd Step*/
		table{
			border-collapse:collapse;
			border:none;
		}
		table tr td{
			padding:10px;
		}
		</style>
	</head>
	<body>
		<h1>Login</h1>
		<?php 
		
		if(isset($_COOKIE['success']))
		{
			echo "<p>".$_COOKIE['success']."</p>";
		}
		if(isset($_COOKIE['error']))
		{
			echo "<p>".$_COOKIE['error']."</p>";
		}
		
		if(isset($_POST['login']))
		{
			//4.1 Collect form data with filter
			$email = filterData($_POST['email']);
			$pwd = filterData($_POST['pwd']);
			//4.3 verify the credentials
			
			$res=mysqli_query($con,"select *from register where email='$email'");
			if(mysqli_num_rows($res)==1)
			{
				$row=mysqli_fetch_assoc($res);
				if(password_verify($pwd,$row['password']))
				{
					if($row['status']=="active")
					{
						$_SESSION['logintrue']=$row['uniid'];
						header("Location:home.php");
					}
					else
					{
						echo "<p>Please activate your account</p>";
					}
				}
				else
				{
					echo "Sorry! Wrong password entered for the Email";
				}
			}
			else
			{
				echo "<p>Sorry! Wrong Email entered</p>";
			}
			
		}
		function filterData($data){
			$data = (isset($data))?$data:"";
			return addslashes(strip_tags(trim($data)));
		}
		?>
		<form action="" method="POST" onsubmit="return loginValidate()">
			<table border="1">
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email" id="email"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="pwd" id="pwd"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="login" value="Login"> <a href="forgot.php">Forgot Password</a></td>
				</tr>
				
			</table>
		</form>
		<script>
		function loginValidate()
		{
			/*Email field Validation*/
			var mail = document.getElementById("email").value;
			if(mail.trim()=="")
			{
				alert("Enter EMail");
				return false;
			}
			else
			{
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				
				if(!mail.match(mailformat))
				{
					alert("Please Enter a valid Email");
					return false;
				}
			}
			var pwd = document.getElementById("pwd").value;
			if(pwd.trim()=="")
			{
				alert("Enter Password");
				return false;
			}
		}
		</script>
	</body>
</html>