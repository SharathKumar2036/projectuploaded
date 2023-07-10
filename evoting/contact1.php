<html>
<title>E-voting</title>
<head>
<link rel="stylesheet" href="">
</head>
<style type="text/css">
  @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
  body{
  background-image: url("http://localhost/evoting/bg.jpg");
  background-repeat:no-repeat;
  background-size:1500px,1000px;
}

.nav{
    position: absolute;
    top: 75%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: rgba(0,0.8,0,0.6);
    width:560px;
    height:490px;
    border-radius: 20px;
    padding: 50px;
    color: white;
}
/* Add a black background color to the top navigation */
.topnav {
  background-color: black;
  overflow: auto;
}

.topnav a.logout {
  float: right;
  color: white;
  text-align: center;
  padding: 30px 60px;
  text-decoration: none;
  font-size: 17px;
}


/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 30px 60px;
  text-decoration: none;
  font-size: 17px;
}



/* Change the color of links on hover */
.topnav a:hover {
  background-color: lightblue;
  color: green;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
 input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }
  .align{
    margin-left: 240px;
  }
</style>
<body>
 <div class="topnav">
 
  <a href="http://localhost/evoting/home.php">Home</a>
  <a href="#news">Admin</a>
  <a href="http://localhost/evoting/vote.php">Voter</a>
  <a  class="active" ref="http://localhost/evoting/contact1.php">Contact Us</a>
  <a href="http://localhost/evoting/about1.php">About</a>
    <a class="logout" href="http://localhost/evoting/login.php">Log out</a>
 </div> 
<form action="" method="POST">

  <b><p align="center" style="font-size:30px">Contact Us</b></p><br><br>
    <div class="nav">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name.." required="">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name.." required="">

      <label for="lname">Email</label>
      <input type="text" id="email" name="emails" placeholder="@gmail.com" required>


      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">INDIA</option>
      </select>

      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" required placeholder="Write something.." style="height:150px"></textarea><br><br><br>

      <input type="submit" class="align" value="Submit">

  </div>

</form>
</body>
</html>


