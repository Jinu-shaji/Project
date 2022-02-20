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
<li><a href="advisorhome.php">HOME</a></li>
<li><a>GUIDE</a>
<ul>
<li><a href="addguide.php">ADD</a></li>
<li><a href="guideview.php">VIEW</a></li>

</ul>
</li>
<li><a>STUDENT</a>
<ul>
<li><a href="studentadd.php">ADD</a></li>
<li><a href="groupstudent.php">GROUP(mini project)</a></li>

</ul>
</li>
<li><a>CHANGE PASSWORD</a>
</li>
<li><a href="main.html">LOGOUT!</a>

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



<a href="addworks.php">add works</a>

</body>
