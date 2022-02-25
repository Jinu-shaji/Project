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
  <li><a href="studenthome.php">HOME</a></li>
  <!-- <li><a>Advisors</a> -->
<li><a href="">MAIN</a></li>
<li><a href="">MINI</a></li>
<li><a href="">SEMINAR</a></li>

<li><a href="changepassword.php">CHANGE PASSWORD</a></li>

<li><a href="home.html">LOGOUT!</a></li>
</ul>
</div>
		<div class="title">
			<h3>PROJECT PIVOT </h3></div></header><br><br>
<link rel="stylesheet" type="text/css" href="form.css"><h2><font color="green"><b>BATCH : 
<?php echo  $_SESSION['batch'] ;?></b></font></h2>
<br><br><br><br><br>
<center><h1><b><font size="50px" face="Bernard MT Condensed" >WELCOME 
<?php 
echo  $_SESSION['uid'] ;


?>
</font></b></h1></center>

</div>
<p><h2><marquee><font color="red">As an advisor you can add students,allocate guides and group students and also assign works for them</marquee></h2></p>

<br><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="mini.php" id="rcorners1">MINI PROJECT</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="main.php" id="rcorners1">MAIN PROJECT</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="seminar.php" id="rcorners1">SEMINAR</a>

</body>
