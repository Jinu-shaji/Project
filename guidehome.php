<?php

session_start();
?>
<html>
<head>
	<title>Divguide</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
 <style> 
#rcorners1 {
  border-radius: 25px;
  background: #73AD21;
  padding: 40px; 
  width: 200px;
  height: 150px;  
}
</style>
</head>
<body style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">
	<header>
		<div class="main">
<ul>
  <li><a href="guidehome.php">HOME</a></li>
  <!-- <li><a>Advisors</a> -->
<li><a href="guidehome.php">MAIN</a></li>
<li><a href="viewministu.php">MINI</a></li>
<li><a href="guidehome.php">SEMINAR</a></li>

<li><a href="changepassword.php">CHANGE PASSWORD</a></li>

<li><a href="home.html">LOGOUT!</a></li>
</ul>
</div>
		<div class="title">
			<h3>PROJECT PIVOT </h3></div></header><br><br>
<link rel="stylesheet" type="text/css" href="form.css"><br><br><br><br><br>
<center><h1><b><font size="50px" face="Bernard MT Condensed" >WELCOME GUIDE
<?php 
echo  $_SESSION['batch'] ;
?>
</font></b></h1></center>

</div>
<p><h2><marquee><font color="red">As an advisor you can add students,allocate guides and group students and also assign works for them</marquee></h2></p>

<br><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="guidemini.php" id="rcorners1">MINI PROJECT</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="" id="rcorners1">MAIN PROJECT</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="" id="rcorners1">SEMINAR</a>

</body>
