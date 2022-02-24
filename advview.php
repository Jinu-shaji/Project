<?php

$con=mysqli_connect('localhost','root','','project');
if(!$con)
echo "not connected";
if (isset($_POST['save'])){
$batch=$_POST['batch'];
$name=$_POST['name'];
$sid=$_POST['sid'];


}
$result=mysqli_query($con,"select * from advisor ");
?>
<html>
<head>
	

<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="view.css">
<link rel="stylesheet" type="text/css" href="search.css"></head>
<body style="background-image: url('sky.jpg'); background-repeat: no-repeat;background-size: cover"><header>
            <div class="main">
    <ul>
<li><a href="adminhome.php">HOME</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header><br><br>
<font face="Bahnschrift Condensed">
<h2><center><font color="green">ADVISORS</font></center></h2>
<form  method="post" action="advsearch.php" >
	<div class="input-group">
		<table style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">
			<tr align="left" >
<input type="text" name="srch" placeholder="search here.." class="btns">
<input type="submit" name="search" value="search" class="btn"></tr></table></div>
</form>
<table >
<thead class="trs">
<tr >
<th>BATCH</th>
<th>NAME</th>
<th>DEPARTEMENT</th>


<th colspan="2"> Action </th></tr></thead>
<tbody>
<?php while ($row=mysqli_fetch_array($result)) { ?>
<tr><td><?php echo $row['batch']; ?></td>
	<td><?php echo $row['name']; ?></td>

<td><?php echo $row['dept']; ?></td>



<td>
<a class="button primary edit" name="edit" href="advedit.php">EDIT</a>
<a class="del_btn" name="delete" href="">DELETE</a></td>

</tr> <?php } ?>
</table>
</body>
</html