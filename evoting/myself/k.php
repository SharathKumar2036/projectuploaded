<html>
<title>E-voting</title>
<head>
<link rel="stylesheet" href="Project.css">
</head>
<style type="text/css">
	@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
</style>
<body>
 <div class="topnav">
 
  <a class="active" href="#home">Home</a>
  <a href="#news">Admin</a>
  <a href="#contact">Voter</a>
  <a href="#about">Contact</a>
  <a class="signin" href="http://localhost/evoting/Signin.php">SIGN IN</a>
 </div>
<br><br><br>
<form action="Project.php" method="POST">
<table
><tr>
	<td align="center"><b>Registration Form<br><br></b></td>
</tr>
<tr>
	<td><i class="fas fa-user-circle"></i>  UserName:</td>
	<td><input type="text" name="name" >
</tr> 
<tr>
	<td><i class="fa fa-id-card"></i>  Id:</td>
	<td><input type="text" name="id" hint="Enter your id">
</tr>
<tr>
	<td><i class="fas fa-envelope"></i>  E-mail id:</td> 
	<td>
		<input type="email" id="emails" required name="emails" multiple placeholder="@gmail">
</tr>
<tr>
	<td><i class="fas fa-phone"></i>  Phone number:</td>
	<td><input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{10}" required>
</tr>
<tr>
	<td><i class="fas fa-lock"></i>  Password:</td>
	<td><input type="varchar" name="password" hint="Enter your Password">
</tr>
<tr>
	<td><i class="fas fa-key"></i>  Confirm Password:</td>
	<td><input type="varchar" name="cpassword" hint="Re-enter your Password">
</tr>
<tr>
	<td colspan=4 align="center"><input type="Submit" class="bt" align="center" name="save" value="Sign Up">
</tr>
</table>
</body>

