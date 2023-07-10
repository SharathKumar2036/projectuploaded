<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="ovote.css">
</head>

<body>

</body>
</html>
<?php
include 'connection.php';
$details=mysqli_query($con,"SELECT * FROM vote");
while($row=mysqli_fetch_array($details)) 
{
	$store1=$row['Sharath'];
	$store2=$row['Mani'];
	$store3=$row['Rami'];
	$result=$store1+$store2+$store3;
	$per_Sharath=round($store1*100/$result).'%';
	$per_Mani=round($store2*100/$result).'%';
	$per_Rami=round($store3*100/$result).'%';
	echo "<div class='records' align='center'>&nbsp;
	<img src='me.jpg'>&nbsp;<b>$store1($per_Sharath)<p style='color:darkgray'>Sharath</p></b>
	<img src='bhuvi.jpg'>&nbsp;<b>$store2($per_Mani)<p style='color:darkgray'>Bhuvi</p></b>
	<img src='dhoni.jfif'>&nbsp;<b>$store3($per_Rami)<p style='color:darkgray'>Dhoni</p></b>
	</div>";
}
?>