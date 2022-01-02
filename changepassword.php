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
</head>
<body>
<h2 align="center">CHANGE PASSWORD</h2>
<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="" align="center">
Current Password:<br>
<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
<br>
New Password:<br>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
Confirm Password:<br>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit">
<a href="adminhome.php" class="ca">Home</a>
</form>
<br>=
<br>
</body>
</html>