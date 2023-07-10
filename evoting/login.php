<?php
$conn=mysqli_connect("localhost","root","","userregistration") or die (mysql_error());
if(isset($_POST["Login"])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(!empty($username) && !empty($password)){
		$query="select * from entrydetails where username='$username' and password='$password'";
		$res=mysqli_query($conn,$query);
		$count=mysqli_num_rows($res);
		if($count!=0){
			header('location:vote.php');
		}
		else{
			echo  '<script>alert("Incorrect Password")</script>';
			
		}
	}
else{
	echo "Please enter required fields";	
}
}
?>
<html>
<title>E-voting</title>
<head>
<link rel="stylesheet" href="login.css">
</head>
<style type="text/css">
	@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
</style>
<body>
 <div class="topnav"> 
 
  <a class="active" href="http://localhost/evoting/login.php">Home</a>
  <a href="#news">Admin</a>
  <a href="http://localhost/evoting/voter.php">Voter</a>
  <a href="http://localhost/evoting/contact.php">Contact Us</a>
  <a href="http://localhost/evoting/about.php">About</a>
 </div>
<br><br><br>
<form action="login.php" method="post">
<table>
<tr>
	<td align="center"><img class="center" src="icon.jpg"><br><br><b><u>Log In</u></td>
</tr> 
<tr>
	<td><i class="fa fa-id-card"></i> 	 Username &emsp;:</td>
	<td><input type="id"  name="username" required>
</tr>
	<td><i class="fas fa-lock"></i> Password&emsp;&nbsp;&nbsp; :</td>
	<td><input type="varchar"  name="password" required>
</tr>&emsp;
<tr>
	<td colspan=0 ><input type="Submit" class="bt"  name="Login" value="Login">
</tr>
<tr>
	<td colspan=0 ><p style="font-size:16px">Click here to recover your password</p><input type="submit" class="bts"  name="ForgotPassword" align="right" value="ForgotPassword" style="text-align:right"><a href="update_member_information.php"></a>
</tr>
<tr>
	<td colspan=4 align="right">New User:<a href="http://localhost/evoting/register.php"><input type="button" class="btr" align="center" name="save" value="Register"></a>
</tr>
</table>
</form>
</body>
</html>

