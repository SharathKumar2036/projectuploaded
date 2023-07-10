<!DOCTYPE html>
<html>
<title>Vote System</title>
<head>
	<link rel="stylesheet" href="ovote.css">
</head>
<body>
	<form method="post" action="vote.php">
 <div class="topnav"> 
 
  <a  href="http://localhost/evoting/home.php">Home</a>
  <a href="#news">Admin</a>
  <a class="active" href="http://localhost/evoting/voter.php">Voter</a>
  <a href="http://localhost/evoting/contact1.php">Contact Us</a>
  <a href="http://localhost/evoting/about1.php">About</a>
  <a class="logout" href="http://localhost/evoting/login.php">Log out</a>
 </div>
 <div class="l">
<h1 align="center">Welcome User</h1>
<h2>Vote for your Candidate</h2>
<input type="submit"  name="aaa" value="Sharath">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="bbb" value="Bhuvi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="ccc" value="Dhoni">	
</div>
</form>
</body>
</html>
<?php
include 'connection.php';
if(isset($_COOKIE['b']))
{
	echo "<div class='message' style='color:red'><b>You cannot vote again..!</b></div>";
}
else{
if(isset($_POST['aaa']))
{  	$name='A';
	$value='true';
	setcookie($name,$value,time()+(1*365*24*60*60));
	$Sharath=mysqli_query($con,"UPDATE choose SET Sharath=Sharath+1");
	if($Sharath){
		header('location:detail.php');
		echo "<div class='message'>Your vote is caste for Sharath</div>";
		
		
	}

}
if(isset($_POST['bbb']))
{	$name='A';
	$value='true';
	setcookie($name,$value,time()+(1*365*24*60*60));
	$Bhuvi=mysqli_query($con,"UPDATE choose SET Bhuvi=Bhuvi+1");
	if($Bhuvi){
		header('location:detail.php');
		echo "<div class='message'>Your vote is caste for Bhuvi</div>";
		
		
	}

}
if(isset($_POST['ccc']))
{	$name='A';
	$value='true';
	setcookie($name,$value,time()+(1*365*24*60*60));
	$Dhoni=mysqli_query($con,"UPDATE choose SET Dhoni=Dhoni+1");
	if($Dhoni){
		header('location:detail.php');
		echo "<div class='message'>Your vote is caste for Dhoni</div>";
		
		
	}

}}

