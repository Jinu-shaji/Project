<?php

session_start();
?>
<html>
<head>
	<title>Divguide</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
 
</style>
</head>
<body style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">
	<header>
		<div class="main">
<ul>
  <li><a href="studenthome.php">HOME</a></li>
  <!-- <li><a>Advisors</a> -->


<li><a href="changepassword.php">CHANGE PASSWORD</a></li>

<li><a href="home.html">LOGOUT!</a></li>
</ul>
</div>
		<div class="title">
			<h3>PROJECT PIVOT </h3></div></header>
<link rel="stylesheet" type="text/css" href="form.css"><br>
<form style="background-image: url('blue.jpeg'); background-repeat: no-repeat;background-size: cover;width: 100%;opacity: 0.8"><font color="white" ><b><center><h2>
<?php

$con=mysqli_connect('localhost','root','','project');
if(!$con)
echo "not connected";
$rollno=$_SESSION['uid'] ;
$s="select gno from groupstu where rollno='$rollno'";
$si=mysqli_query($con,$s);
while ($row=mysqli_fetch_array($si)) {
  $gno=$row['gno'];
  $_SESSION['gno']=$row['gno'];
  echo "GROUP NUMBER : $gno";
}
?>
<br><br>
<?php

$s1="select guide from groupstu where rollno='$rollno'";
$si1=mysqli_query($con,$s1);
while ($row=mysqli_fetch_array($si1)) {
  $guide=$row['guide'];
  echo "GUIDE : $guide";
}

?>
<br><br>
<?php

$result=mysqli_query($con,"select * from groupstu where gno='$gno'");

?>
<?php echo"MEMBERS : ";while ($row=mysqli_fetch_array($result)) { ?>

<?php echo $row['name']; ?>,



</tr> <?php } ?></h3></center></b></font></form>
</body>
