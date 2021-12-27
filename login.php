<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
if(isset($_POST['login'])){
	$uid=$_POST['uid'];
	$password=$_POST['password'];
	$role=$_POST['role'];

	$check="select * from login where  uid='$uid'AND password='$password'AND role='$role'";

	$run=mysqli_query($con,$check);
	if(mysqli_num_rows($run)>0){
		header("location:adminhome.php");
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
					<img src="avatar.png" class="avatar"><div>

  <div class="container">
    <label for="uid"><b>UserId</b></label>
    <input type="text" placeholder="Enter UserId" name="uid" required></div>
 <div class="container">
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
</div>
    <div class="container">
<label for="uid"><b>Role</b></label>
<select name="role"  required>
<option value="">
<option value="admin">admin
<option value="class advisor">class advisor
<option value="guide">guide
	<option value="student">student
</select></div>

    <button type="submit" name="login">Login</button>
    
  </div>

  </font>
</form></center>
		</body>
</html>
