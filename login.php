<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
if(isset($_POST['login'])){
	$uid=$_POST['uid'];
	$password=$_POST['password'];
	

	$check1="select * from login where  uid='$uid'AND password='$password' AND role='admin'";
	$run1=mysqli_query($con,$check1);
	if(mysqli_num_rows($run1)>0){
		
		header("location:adminhome.php");
		exit;   
   }
	else{
		echo'<script>alert("Login failed!!")</script>'; 
		
	}

	$check2="select * from login where  uid='$uid'AND password='$password' AND role='advisor'";
	$run2=mysqli_query($con,$check2);
	if(mysqli_num_rows($run2)>0){
		$row=mysqli_fetch_assoc($run2);
		$_SESSION['batch']=$row['batch'];
		header("location:advisorhome.php");
		exit;   
   }
	else{
		echo'<script>alert("Login failed!!")</script>'; 
		
	}


	$check3="select * from login where  uid='$uid'AND password='$password' AND role='guide'";
	$run3=mysqli_query($con,$check3);
	if(mysqli_num_rows($run3)>0){
		$row=mysqli_fetch_assoc($run3);
		$_SESSION['batch']=$row['batch'];
		$_SESSION['uid']=$row['uid'];
		header("location:guidehome.php");
		exit;   
   }
	else{
		echo'<script>alert("Login failed!!")</script>'; 
		
	}



	$check4="select * from login where  uid='$uid'AND password='$password' AND role='student'";
	$run4=mysqli_query($con,$check4);
	if(mysqli_num_rows($run4)>0){
		$row=mysqli_fetch_assoc($run4);
		$_SESSION['batch']=$row['batch'];
		$_SESSION['uid']=$row['uid'];
		header("location:studenthome.php");
		exit;   
   }
	else{
		echo'<script>alert("Login failed!!")</script>'; 
		
	}
}




?>
<html>
<head>
	<title>form login</title>
	<head>


<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">
		<header>
			<div class="main">
	<ul>
<li><a href="home.html">HOME</a></li>
<li><a href="login.php">LOGIN</a></li>
<li><a href="reg.php">REGISTER</a></li>
</ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
		<br><br>
		<font face="Bahnschrift Condensed"><center><h1>Login To Continue..</h1>
			<form method="POST" action="" style="background-image: url('black.jpg'); background-repeat: no-repeat;background-size: cover">
				<div class="imgcontainer">
					<img src="avatar1.png" class="avatar"><div><br>

  <div class="container"><font color="white">
    <label for="uid"><b>UserName</b></label>
    <input type="text"  name="uid" required></div>
 <div class="container">
    <label for="password"><b>Password</b></label>
    <input type="password"  name="password" required>
</div></font>
    
</select></div>

    <button type="submit" name="login">Login</button>
    <button type="reset" name="cancel">Cancel</button>
    
  </div>

  </font>
</form></center>
		</body>
</html>
