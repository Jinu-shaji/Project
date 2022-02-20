<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
if(!$con)
echo "not connected";
$uid=$_SESSION["uid"];
$uids="select name from guide where uid='$uid'";
$nam=mysqli_query($con,$uids);
while ($row=mysqli_fetch_array($nam)) {
  $nme=$row['name'];
  
}
$result=mysqli_query($con,"select * from groupstu where guide='$nme'");
?>
<html>
<head>
  

<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="view.css">
<link rel="stylesheet" type="text/css" href="search.css"></head>
<body><header>
            <div class="main">
    <ul>
<li><a href="guidehome.php">HOME</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header><br><br>
<font face="Bahnschrift Condensed">
<h2><center><font color="green">MY PROFILE</font></center></h2>

<table ><b>
<thead class="trs"><td>groupno</td>
  <td>students</td>
<?php while ($row=mysqli_fetch_array($result)) { ?>
<tr>
  <td><?php echo $row['gno']; ?></td>
<td><?php echo $row['name']; ?></td>



</tr> <?php } ?>
</table>
</body>
</html