<html>
<body>
<form action="image.php" method="POST" enctype="multipart/form-data">
<h1>Candidates</h1>
<p>Name:<input type="text"></p>
<p><input type="file" name="file" id="fileto upload"></p>
<p><input type="submit" value="Upload image" name="submit"></p>
</body>
</html>
<?php
error_reporting(0);
?>
<?php
$conn=mysqli_connect("localhost","root","","Project") or die (mysql_error());
if(isset($_POST["submit"])){
	$filename = $_FILES["file"]["name"]; 
	$tempname = $_FILES["file"]["tmp_name"];
	$folder = "image/".$filename;
		if(move_uploaded_file($tempname,$folder)){
			$sql="insert into image (filename) VALUES ('$filename')";
			mysqli_query($conn,$sql);
			echo "Image uploaded successfully";
			echo "<img src=".$folder."/>";
		}
		else{
			echo "Failed to upload";		
		}
}
$result=mysqli_query($conn,'SELECT * FROM image');
?>
