<?php
$conn=mysqli_connect("localhost","root","","register") or die (mysql_error());
if(isset($_POST["Login"])){
	$uid=$_POST['uid'];
	$password=$_POST['password'];
	if(!empty($uid) && !empty($password)){
		$query="select * from regi where id='$uid' and password='$password'";
		$res=mysqli_query($conn,$query);
		$count=mysqli_num_rows($res);
		if($count!=0){
			echo "Successful";
		}
		else{
			echo "Incorrect id or password";
		}
	}
else{
	echo "Please enter required fields";	
}
}
?>
