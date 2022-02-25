<?php

session_start();

?>

<html>
<head>
	<title>Div</title>
	 <style> 
#rcorners1 {
  border-radius: 25px;
  background: #73AD21;
  padding: 40px; 
  width: 200px;
  height: 150px;  
}
</style>
<link rel="stylesheet" type="text/css" href="maincss.css">
</head>
<body  style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">

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
<li><a href="home.html">LOGOUT!</a>

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



<p><h2><marquee><font color="red">As an advisor you can add students,allocate guides and group students and also assign works for them</marquee></h2></p>

<br><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="addworks.php" id="rcorners1">ADD WORKS</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="guideview.php" id="rcorners1">GUIDES</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="" id="rcorners1">STUDENTS</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="" id="rcorners1">PERFORMANCE</a>

</body>
