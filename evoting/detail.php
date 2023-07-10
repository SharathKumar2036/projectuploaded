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
 </form>
 </body>
 </html>
 <?php
include 'connection.php';
$detail=mysqli_query($con,"SELECT * FROM choose");
while($row=mysqli_fetch_array($detail)) 
{
	$store1=$row['Sharath'];
	$store2=$row['Bhuvi'];
	$store3=$row['Dhoni'];
	$result=$store1+$store2+$store3;
	$per_Sharath=round($store1*100/$result).'%';
	$per_Bhuvi=round($store2*100/$result).'%';
	$per_Dhoni=round($store3*100/$result).'%';
	echo "<div class='records' align='center'>&nbsp;
	<img src='me.jpg'>&nbsp;<b>$store1($per_Sharath)<p style='color:darkgray'>Sharath</p></b>
	<img src='bhuvi.jpg'>&nbsp;<b>$store2($per_Bhuvi)<p style='color:darkgray'>Bhuvi</p></b>
	<img src='dhoni.jfif'>&nbsp;<b>$store3($per_Dhoni)<p style='color:darkgray'>Dhoni</p></b>
	</div>";
}
?>