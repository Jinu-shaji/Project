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
  <li><a href="guidehome.php">HOME</a></li>
  <!-- <li><a>Advisors</a> -->


<li><a href="changepassword.php">CHANGE PASSWORD</a></li>

<li><a href="home.html">LOGOUT!</a></li>
</ul>
</div>
		<div class="title">
			<h3>PROJECT PIVOT </h3></div></header>
<link rel="stylesheet" type="text/css" href="form.css"><br>
<h2><center>TEAM</h2>
<form style="border-style: groove;">
<?php

$con=mysqli_connect('localhost','root','','project');
if(!$con)
echo "not connected";
$uid=$_SESSION['uid'] ;
/*$s="select name from guide where uid='$uid'";
$si=mysqli_query($con,$s);
while ($row=mysqli_fetch_array($si)) {
  $guide=$row['name'];

}

?>
<br><br>
<?php
$result=mysqli_query($con,"select * from groupstu where guide='$guide'");

?>
<?php while ($row=mysqli_fetch_array($result)) { ?>

GROUP NUMBER : <?php echo $row['gno']; ?>

MEMBER : <?php echo $row['name']; ?>
<br>


</tr> <?php } ?>

*/?>
<table style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">
<thead  >
<tr >
  <?php
$s="select name from guide where uid='$uid'";
$si=mysqli_query($con,$s);
while ($row=mysqli_fetch_array($si)) {
  $guide=$row['name'];

}


$result=mysqli_query($con,"select * from groupstu where guide='$guide'");

?>

<br>


</tr>
<br><br>
<?php
$result=mysqli_query($con,"select * from groupstu where guide='$guide'");

?>

<th>GROUP NUMBER</th>
<th>MEMBERS</th>

<tbody>
<?php while ($row=mysqli_fetch_array($result)) { ?>
<tr>
<td><?php echo $row['gno']; ?></td>
<td><?php echo $row['name']; ?></td>

<td>
</tr> <?php } ?>
</table>
</body>
