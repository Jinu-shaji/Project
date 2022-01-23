<?php
session_start();
$_SESSION["1d"] = "1";
$con = mysqli_connect('localhost','root','','project') or die('Unable To connect');

if (count($_POST) > 0) {
    $result = mysqli_query($con, "SELECT *from login ");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($con, "UPDATE login set password='" . $_POST["newPassword"] . "' ");
$message = "Password changed successfully!!!";
       header("location:login.php");
        exit;
    } else
        $message = "Current Password is not correct";
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Password Change</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
        <link rel="stylesheet" type="text/css" href="changepas.css">
</head>
<body>
	<header>
            <div class="main">
    <ul>
<li><a href="adminhome.php">Home</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
<font face="Bahnschrift Condensed">
<h2 align="center">CHANGE PASSWORD</h2>
<div><?php if(isset($message)) { echo $message; } ?></div>

<div class="mainDiv">
  <div class="cardStyle">
<form method="post" action="" align="center" id="signupForm">

<div class="inputDiv">
      <label class="inputLabel" for="password">Current Password</label>
      <input type="password" id="currentPassword" name="currentPassword" required>
    </div>
<div class="inputDiv">
      <label class="inputLabel" for="password">New Password</label>
      <input type="password" id="password" name="newPassword" required>
    </div>
<div class="inputDiv">
      <label class="inputLabel" for="confirmPassword">Confirm Password</label>
      <input type="password" id="confirmPassword" name="confirmPassword">
    </div><br>
<div class="buttonWrapper">
      <button type="submit" id="submitButton"  class="submitButton pure-button pure-button-primary">
        <span>Continue</span>
       
      </button>
    </div>
</form>
<br>=
<br>
</body>
</html>