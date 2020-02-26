<?php include("connect.php");?>
<html>
	<head>
		<title>Register Here</title>
		<style>
			/* 2nd Step*/
			table{
				border-collapse:collapse;
				border:none;
			}
			table tr td{padding:10px;}
		</style>
	</head>
	<body>
		<h1>Register Here</h1>
		
		<?php 
		if(isset($_COOKIE['success']))
		{
			echo "<p>".$_COOKIE['success']."</p>";
		}
		if(isset($_COOKIE['error']))
		{
			echo "<p>".$_COOKIE['error']."</p>";
		}
		// 4th Step
		if(isset($_POST['submit']))
		{
			//4.1 collect the form data by filtering
			$uname = filterData($_POST['uname']);
			$email = filterData($_POST['email']);
			$pwd = filterData($_POST['pwd']);
			$pwd = password_hash($pwd,PASSWORD_DEFAULT);
			$mobile = filterData($_POST['mobile']);
			$dob = filterData($_POST['dob']);
			$gender = filterData($_POST['gender']);
			$addr = filterData($_POST['address']);
			$city = filterData($_POST['city']);
			$state = filterData($_POST['state']);
			$terms = filterData($_POST['terms']);
			$ip = $_SERVER['REMOTE_ADDR'];
			$uniid = md5(str_shuffle($uname.$email.$mobile));
			// 4.3 insert data into table
			
			mysqli_query($con,"insert into register(username,email,password,mobile,gender,dob,address,city,state,terms,ip,uniid) values('$uname','$email','$pwd','$mobile','$gender','$dob','$addr','$city','$state','$terms','$ip','$uniid')");
			
			if(mysqli_affected_rows($con)==1)
			{
				$to = $email;
				$subject = "Account activation link-GoPHP";
				$message="Hi $uname,<br><br>Thanks for creating an account with us.Please click the below link to activate your account.<br><br><a href='http://localhost:100/9am/activate.php?token=$uniid' target='_blank'>Activate Here</a><br><br>Thanks<br>Team";
				
				$headres = "Content-Type:text/html".'\r\n'."From:info@gophp.in".'\r\n'."cc:ram@mail.com";
				if(mail($to,$subject,$message,$headers))
				{
					setcookie("success","Thanks,Account Created successfully, Please activate your account",time()+2);
					header("Location:register.php");
				}
				else
				{
					8
					header("Location:register.php");
				}
			}
			else
			{
				echo "<p>Sorry! Unable to create an account. Try again</p>";
				echo mysqli_error($con);
			}
			
		}
		function filterData($data){
			$data = (isset($data))?$data:"";
			return addslashes(strip_tags(trim($data)));
		}
		?>
		
		<form method="POST" action="" onsubmit="return registerValidate()">
			<table border="1">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="uname" id="uname"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email" id="email"></td>
				</tr>
				
				<tr>
					<td>Mobile:</td>
					<td><input type="text" name="mobile" id="mobile"></td>
				</tr>
				
				<tr>
					<td>Password:</td>
					<td><input type="password" name="pwd" id="pwd"></td>
				</tr>
				
				<tr>
					<td>Confirm Password
					:</td>
					<td><input type="password" name="cpwd" id="cpwd"></td>
				</tr>
				
				<tr>
					<td>Gender:</td>
					<td>
					<input type="radio" name="gender" value="Male">Male
					
					<input type="radio" name="gender" value="Female">Female
					</td>
				</tr>
				
				<tr>
					<td>DOB:</td>
					<td><input type="text" name="dob" id="dob" placeholder="yyyy-mm-dd"></td>
				</tr>
				
				<tr>
					<td>Address:</td>
					<td><textarea name="address" id="address" ></textarea></td>
				</tr>
				
				<tr>
					<td>City:</td>
					<td><input type="text" name="city" id="city"></td>
				</tr>
				
				<tr>
					<td>State:</td>
					<td>
						<select name="state" id="state">
						<option value="">--Select State--</option>
						<option value="Andhrapradesh">Andhrapradesh</option>
						<option value="Telangana">Telangana</option>
						<option value="Maharastra">Maharastra</option>
						<option value="Uttarpradesh">Uttarpradesh</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="checkbox" name="terms" value="1"> Please accept Terms and Conditions</td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" value="Register" name='submit'></td>
				</tr>
				
			</table>
		</form>
		<script>
		function registerValidate()
		{
			/* Username field validation */
			var uname = document.getElementById("uname").value;
			if(uname=="")
			{
				alert("Enter Username");
				return false;
			}
			else
			{
				if(uname.trim().length<4)
				{
					alert("Username should contains atleaset 4 characters in length");
					return false;
				}
			}
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
			/*Mobile Filed Validation*/
			var mob = document.getElementById("mobile").value;
			
			if(mob.trim()=="")
			{
				alert("Enter Mobile");
				return false;
			}
			else
			{
				if(mob.length!=10)
				{
					alert("Please Enter a 10 digit Mobile Number");
					return false
				}
				else if(isNaN(mob))
				{
					alert("Mobile number should contains only digits");
					return false;
				}
			}
			
			/*Password Validation*/
			var pwd = document.getElementById("pwd").value;
			if(pwd.trim()=="")
			{
				alert("Enter Password");
				return false;
			}
			else
			{
				if(pwd.length<6)
				{
					alert("Password should contains atleaset 6 charactres in length");
					return false;
				}
			}
			
			/*Confirm Password Validation*/
			
			var cpwd = document.getElementById("cpwd").value;
			if(cpwd.trim()=="")
			{
				alert("Enter Confirm Password");
				return false;
			}
			
			/*Password Matching*/
			if(pwd != cpwd)
			{
				alert("Passwords Does not matched");
				return false;
			}
			
			var obj =document.getElementsByName("gender");
			if(!(obj[0].checked || obj[1].checked))
			{
				alert("Please Select Gender");
				return false;
			}
		}
		</script>
	</body>
</html>