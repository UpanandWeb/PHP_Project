<?php
$con=mysqli_connect("localhost","root","","contact_form")or die("unable to connect to DB");


?>
<html>
	<head>
		<title>Registration</title>
		<style>
		/* 2nd Step*/			
			table{
			table-collapse:collapse;
			border:none;
			}
			table tr td{padding:5px;}
			
		</style>
	</head>
	<body>
		<h1>Registration</h1>
		
		<?php
		/* <!--Step 4.1 Collect Form Data using PHP code -->*/
			if(isset($_POST['submit']))
			{
				//collect the form data by filtering
				
				$uname=filterData($_POST['uname']);
				$email=filterData($_POST['email']);
				$pwd=filterData($_POST['pwd']);
				$pwd = password_hash($pwd,PASSWORD_DEFAULT);
				$gender=filterData($_POST['gender']);
				$dob=filterData($_POST['dob']);
				$mobile=filterData($_POST['mobile']);
				$addr=filterData($_POST['addr']);
				$city=filterData($_POST['city']);
				$state=filterData($_POST['state']);
				$terms=filterData($_POST['terms']);
				$ip = $_SERVER['REMOTE_ADDR'];
				$uniid = md5(str_shuffle($uname.$email.$mobile));
			
			// 4.3 insert data into table
			
			mysqli_query($con,"insert into registration(uname,email,pwd,gender,dob,mobile,addr,city,state,terms,doj) VALUES ('$uname', '$email','$pwd','$gender','$dob','$mobile','$addr','$city','$state','$terms',current_timestamp())");
				
				//INSERT INTO `registration` (`id`, `uname`, `email`, `pwd`, `gender`, `dob`, `mobile`, `addr`, `city`, `state`, `terms`, `doj`, `uniid`, `status`, `profile`) VALUES (NULL, 'Nazeer', 'Nazeer@gmail.com', '123456', '123456', '1919-02-20', '1234567891', 'Mitrivanam ', 'Hyderabad', 'Telengana', '1', current_timestamp(), '', '', '');
				
				if(mysqli_affected_rows($con)==1)
				{
					echo"<br>";
					echo"  Thanks $uname We will get back to soon !";
					echo"<br>";
				}
				else
				{
					echo"<br>";
					echo mysqli_error($con);
					echo"<br>";
					echo"sorry ! unable to submit, try Again";	
					echo"<br>";
				}
			
			
				
			
			}
		
			function filterData($data)
					{
					$data = (isset($data))?$data:"";
					return addslashes(strip_tags(trim($data)));
					}
		
		?>
		
		
		
		
		
		<form method="POST" action="" onsubmit="return regvalidate()">
		<table border="1";>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname" id="uname"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" id="email"></td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td><input type="password" name="pwd" id="pwd"></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="cpwd" id="cpwd"></td>
			</tr>
			
			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female </td>
			</tr>
			
			<tr>
				<td>DOB</td>
				<td><input type="text" name="dob" id="dob" placeholder="yyyy-mm-dd"></td>
			</tr>
			
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="mobile" id="mobile"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea  name="addr" id="addr"></textarea></td>
			</tr>
			
			<tr>
				<td>City</td>
				<td><input type="text" name="city" id="city"></td>
			</tr>
			<tr>
				<td>State</td>
				<td>
					<select name="state" >
						<option value="">--Select State--</option>
						<option value="Telegana">Telegana</option>
						<option value="AndraPradesh">Andra Pradesh</option>
						<option value="Maharashtra">Maharashtra</option>
						<option value="UttarPradesh">Uttar Pradesh</option>
						<option value="Odissa">Odissa</option>
						<option value="Karnataka">Karnataka</option>
												
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="checkbox" name="terms" value="1">
				I Agree's All the Terms and Conditions</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Registration"></td>
			</tr>
		</table>
		</form>
		
		<script>
		
		function regvalidate()
		{
			
			// User Name Field Validation
			var uname=document.getElementById("uname").value;
			if(uname=="")
			{
				alert("Please Enter Name");
				return false;
			}
			else
			{
				if(uname.trim().legnth<4)
				{
					alert("Username Contain Atleast 4 character in Length");
					return false;
				}
				
			}
			
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
				if(pwd.legnth<6)
				{
					alert("Password should Contains atlest 6 character in Length");
					return false;
				}
			}
			
			
			// Confirm password Field Validation
			var cpwd=document.getElementById("cpwd").value;
			if(cpwd.trim()=="")
			{
				alert("Please Enter Confirm Password");
				return false;
			}
			
	
			
			// Confirm password matching Field Validation
			
			if(pwd!==cpwd)
			{
				alert("Password Doesnot Matched");
				return false;
			}    
			
			
			
			
			
			// Gender Field Validation
						
			var obj =document.getElementsByName("gender");
			if(!(obj[0].checked || obj[1].checked))
			{
				alert("Please Select Gender");
				return false;
			}
			
			
			// Date of birth  Field Validation
			var dob=document.getElementById("dob").value;
			if(dob=="")
			{
				alert("Please Enter Date of Birth");
				return false;
			}
			
			
				// Mobile Field Validation
			
			var mob=document.getElementById("mobile").value;
			if(mob.trim()=="")
			{
				alert("Please Enter Mobile Number");
				return false;
			}
			else
			{
				if(mob.length!=10)
				{
					alert("Please Enter 10 Digit Mobile No.");
					return false;
				}
				else if(isNaN(mob))
				{
					alert("Mobile No Contains Only Digits");
					return false;
				}
			}
			
			


			
			
			// Address Field Validation
			var addr=document.getElementById("address").value;
			if(addr="")
			{
				alert("Please Enter the Address");
				return false;
			}
			
			
			// City Field Validation
			var city=document.getElementById().value;
			if(city=="")
			{
				alert("Please Enter City");
				return false;
			}
			
			
			// terms & Condition Field Validation
			var t=document.getElementById("").isChecked;
			if(t==1)
			{
				alert("Selected value is check");
				return false;
			}
			
		}
		
		</script>
	<body>

</html>