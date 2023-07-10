<?php 
	session_start();
	//connect to database

	$db = mysqli_connect("localhost","root","","userregistration");
	if(isset($_POST['Submit']))
	{
		$username=($_POST['username']);
		$email=($_POST['email']);
		$phone=($_POST['phone']);
		$password=($_POST['password']);
		$cpassword=($_POST['cpassword']);

		if($password==$cpassword)
		{

			
			$s= "select * from entrydetails where username ='$username'";
			$result=mysqli_query($db,$s);
			$num = mysqli_num_rows($result);
			if($num == 1)
			{
				echo  '<script>alert("Username already Taken!")</script>';
			}
			else{
				$sql="INSERT INTO entrydetails(username,email,phone,password) VALUES('$username','$email','$phone','$password')";
					mysqli_query($db,$sql);
					header("location: login.php");//redirects to login page

			}
		}
		else
		{
			$_SESSION['message'] = "The two passwords do not match";
			echo  '<script>alert("Passwords are not matching.Please enter correct password")</script>';
		}
	}
 ?>
<html>
<title>E-voting</title>
<head>
<link rel="stylesheet" href="register.css">
</head>
<style type="text/css">
	@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
</style>
<body>
 <div class="topnav">
 
  <a class="http://localhost/evoting/login.php">Home</a>
  <a href="#news">Admin</a>
  <a href="#contact">Voter</a>
  <a href="http://localhost/evoting/contact.php">Contact Us</a>
  <a href="http://localhost/evoting/about.php">About</a>
  <a class="signin" href="http://localhost/evoting/login.php" href="">Login</a>

 </div>
<br><br><br>
<form action="register.php" method="POST">
<table
><tr>
	<td align="center"><b>Registration Form<br><br></b></td>
</tr>
<tr>
	<td><i class="fas fa-user-circle"></i>  UserName:</td>
	<td><input type="text"  name="username" required="">
</tr> 
<tr>
<td><i class="fas fa-envelope"></i>  E-mail id:</td> 
<td>
		<input type="email" id="emails"  name="email" multiple placeholder="@gmail" required>
</tr>
<tr>
	<td><i class="fas fa-phone"></i>  Phone number:</td>
	<td><input type="tel" id="phone"  name="phone" placeholder="1234-56-789" pattern="[0-9]{10}" required>
</tr>
<tr>
	<td><i class="fas fa-lock"></i>  Password:</td>
	<td><input type="password" name="password"  required="">
</tr>
<tr>
	<td><i class="fas fa-key"></i>  Confirm Password:</td>
	<td><input type="password" id="password"  name="cpassword" required="">
</tr>
<tr>
	<td colspan=0 align="center"><input type="Submit" class="bt" align="center" name="Submit" value="Submit">
</tr>
</form>
</table>

</body>




