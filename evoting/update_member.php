<head>
	<title>update info</title>
	<style>
	body{
		background-image: url("http://localhost/evoting/bg.jpg");
		background-repeat:no-repeat;		
	}
	
	.logout{
    background-color: transparent;
    float: right;
    border: 2px solid #242526;
    color: white;
    top : 1%;
    right : 55%;
    padding: 5px 20px 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    cursor: pointer;
    border-radius: 20px;
    transition: transform 0.2s;

}
.bglog:hover,.logout:hover{
  transform: scale(1.03);
  background-color: #ddd;
  color: black;
}
.bglog a:visited{
	color:white;
}
.bglog a:hover{
	color:black;
}
.msg{
	font-size: 40px;
	color: white;

}
</style>
</head>

<body>
	<div>
	<button class="logout"  onclick="window.location.href='home.php'">Logout</button>
</div> <br>
<br><br><br>
	<?php
	session_start();
		if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
		{
			
			
			$Username=$_SESSION['USER_ID'];
			$link = mysqli_connect('localhost', 'root', '','test'); 
			//$db = mysql_select_db('test'); 
			
			$Username=$_SESSION['USER_ID'];
			$password=$_POST['password'];
			
		if($_POST['submit']=='UPDATE email')
			{
				$q="SELECT password
					FROM test
					WHERE Username='".$Username."'";
					
				$x=mysqli_query($link,$q);
				$r=mysqli_fetch_array($x);
				
				if($r['password']==$password)
				{
					$email=$_POST['email'];
					
					$q="UPDATE test
						SET email='".$email."'
						WHERE Username='".$Username."'";
						
				$x=mysqli_query($link,$q);
				
				if(!$x)
				{
					echo '<h3 align="center" class="msg">something wrong</h3>';
						include('update_member_information.php');
											
				}
				
				else
				{
					echo '<h3 align="center" class="msg">UPDATED</h3>';
					echo "<button class='bglog'><a href='update_member_information.php'>BACK</a></button>";												
				}

				}
				else
				{
					
						echo '<h3 align="center" class="msg">Wrong password</h3>';
						echo "<button class='bglog'><a href='update_member_information.php'>BACK</a></button>";	
						
						exit();
				}
		}
		
		if($_POST['submit']=='UPDATE EMAIL')
			{
				$q="SELECT password
					FROM user
					WHERE Username='".$Username."'";
					
				$x=mysqli_query($link,$q);
				$r=mysqli_fetch_array($x);
				
				if($r['password']==$password)
				{
					$email=$_POST['email'];
					
					$q="UPDATE user
						SET email='".$email."'
						WHERE Username='".$Username."'";
						
				$x=mysqli_query($link,$q);
				
				if(!$x)
				{
					echo '<h3 align="center" class="msg">something wrong</h3>';
					echo "<button class='bglog'><a href='update_member_information.php'>BACK</a></button>";							
				}
				
				else
				{
					echo '<h3 align="center" class="msg">UPDATED</h3>';
					echo "<button class='bglog'><a href='update_member_information.php'>BACK</a></button>";												
				}

				}
				else
				{
					echo '<h3 align="center" class="msg">Wrong password</h3>';
				}
		}
		

		}
			else
		{
			echo "Session expired";
			include('home.php');
		}
	?>
</body>