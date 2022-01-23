<?php

session_start();

?>

<html>
<head>
	<title>Div</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
</head>
<body >

	<header>
		<div class="main">
	<ul>
<li><a href="advisorhome.php">Home</a></li>
<li><a>Guide</a>
<ul>
<li><a href="addguide.php">Add Guide</a></li>
<li><a href="guideview.php">view Guide</a></li>

</ul>
</li>
<li><a>change password</a>
</li>
<li><a href="home.html">LogOut!</a>

</li>
</ul></div>
		<div class="title">
			<h3>PROJECT PIVOT </h3></div></header><br><br>
<link rel="stylesheet" type="text/css" href="form.css"><br><br><br><br><br>
<center><h1><b><font face="Bahnschrift Condensed" >WELCOME ADVISOR<br>

<?php 
echo  $_SESSION['batch'] ;
?>

</font></b></h1></center>





</body>
