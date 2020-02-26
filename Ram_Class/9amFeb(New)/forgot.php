<?php include("connect.php");?>
<html>
	<head>
		<title>Forgot Password</title>
		<style></style>
	</head>
	<body>
		<h1>Forgot Password</h1>
		
		<?php 
		if(isset($_COOKIE['success']))
		{
			echo "<p>".$_COOKIE['success']."</p>";
		}
		if(isset($_COOKIE['error']))
		{
			echo "<p>".$_COOKIE['error']."</p>";
		}
		
		if(isset($_POST['submit']))
		{
			$mail=addslashes(strip_tags(trim($_POST['email'])));
			
			$res=mysqli_query($con,"select email,uniid,username from register where email='$mail'");
			if(mysqli_num_rows($res)==1)
			{
				$row=mysqli_fetch_assoc($res);
				//mail
				$uniid = $row['uniid'];
				$subject = "Reset Password Request-GoPHP";
				$message="Hi ".$row['username'].",<br><br>Your password request has been received. Please click the below link to reset your password.<br><br>
				<a href='http://localhost:100/9am/reset_pass.php?token=$uniid' target='_blank'>Reset Password</a><br><br>Thanks<br>Team";
				
				//echo $message;
				//exit;
				
				$headers = "Content-Type:text/html";
				
				if(mail($email,$subject,$message,$headers))
				{
					setcookie("success","Reset Password link has sent to your email. Please check",time()+2);
					header("Location:forgot.php");
				}
				else
				{
					setcookie("error","Unable to send reset password link, Contact admin.",time()+2);
					header("Location:forgot.php");
				}
				
				
			}
			else
			{
				echo "<p>Email does not match with our DB.</p>";
			}
			
		}
		?>
		
		<form method="POST" action="" onsubmit="return formValidation()">
			<table>
				<tr>
					<td>Enter Email</td>
					<td><input type="text" name="email" id="email"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
		<script>
			function formValidation()
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
			}
		</script>
	</body>
</html>