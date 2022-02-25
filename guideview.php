<?php
session_start();
$batch=$_SESSION['batch'];
$con=mysqli_connect('localhost','root','','project');
if(!$con)
echo "not connected";
if (isset($_POST['save'])){
$batch=$_POST['batch'];
$ugid=$_POST['uid'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
}


$result=mysqli_query($con,"select * from guide where batch='$batch'");
?>

<html>
<head>
	

<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="view.css">
<link rel="stylesheet" type="text/css" href="search.css"></head>
<body style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover"><header>
            <div class="main">
    <ul>
<li><a href="advisorhome.php">HOME</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header><br><br>
<font face="Bahnschrift Condensed">
<h2><center><font color="green">GUIDES(<?php 
echo  $_SESSION['batch'] ;
?>)</font></center></h2>
<form  method="post" action="guidesearch.php" >
	<div class="input-group"><table ><tr align="left" >
<input type="text" name="srch" placeholder="search here.." class="btns">
<input type="submit" name="search" value="search" class="btn"></tr></table></div>
</form>
<table style="background-color: silver; background-repeat: no-repeat;background-size: cover;opacity: 0.8;">
<thead class="trs">
<tr >

<th>NAME</th>
<th>USERNAME</th>

<</thead>
<tbody>
<?php while ($row=mysqli_fetch_array($result)) { ?>
<tr>

<td><?php echo $row['name']; ?></td>
<td><?php echo $row['uid']; ?></td>



</tr> <?php } ?>
</table>
</body>
</html