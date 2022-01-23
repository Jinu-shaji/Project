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
}




?>
<html>
<head>
	<title>form login</title>
	<head>


<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body >
		<header>
			<div class="main">
	<ul>
<li><a href="home.html">Home</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
		<br><br>
		<font face="Bahnschrift Condensed"><center><h1>Login To Continue..</h1>
			<form method="POST" action="">
				<div class="imgcontainer">
					<img src="avatar1.png" class="avatar"><div><br>

  <div class="container">
    <label for="uid"><b>UserName</b></label>
    <input type="text"  name="uid" required></div>
 <div class="container">
    <label for="password"><b>Password</b></label>
    <input type="password"  name="password" required>
</div>
    
</select></div>

    <button type="submit" name="login">Login</button>
    
  </div>

  </font>
</form></center>
		</body>
</html>
