<?php

$con=mysqli_connect('localhost','root','','project');
if(!$con)
echo "not connected";
if (isset($_POST['save'])){
$batch=$_POST['batch'];
$uid=$_POST['uid'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

}
$result=mysqli_query($con,"select * from addadv ");
?>
<html>
<head>
	

<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="view.css">
<link rel="stylesheet" type="text/css" href="search.css"></head>
<body><header>
            <div class="main">
    <ul>
<li><a href="adminhome.php">HOME</a></li>
<li><a href="login.php">LOGIN</a></li>
<li><a href="home.html">LOGOUT!</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header><br><br>
<font face="Bahnschrift Condensed">
<h2><center><font color="green">ADVISORS</font></center></h2>
<form  method="post" action="advsearch.php" >
	<div class="input-group"><table ><tr align="left" >
<input type="text" name="srch" placeholder="search here.." class="btns">
<input type="submit" name="search" value="search" class="btn"></tr></table></div>
</form>
<table >
<thead class="trs">
<tr >
<th>BATCH</th>
<th>UID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>PHONE</th>

<th colspan="2"> Action </th></tr></thead>
<tbody>
<?php while ($row=mysqli_fetch_array($result)) { ?>
<tr>
<td><?php echo $row['batch']; ?></td>
<td><?php echo $row['uid']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>

<td>
<a class="del_btn" name="edit" href="advedit.php">EDIT</a></td>
</tr> <?php } ?>
</table>
</body>
</html