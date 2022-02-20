<?php

$con=mysqli_connect('localhost','root','','project');
if(!$con)
echo "not connected";
if (isset($_POST['save'])){
$sid=$_POST['sid'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dept=$_POST['dept'];
$doj=$_POST['doj'];
$experience=$_POST['experience'];

}
$result=mysqli_query($con,"select * from staff ");
?>
<html>
<head>
	

<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="view.css">
<link rel="stylesheet" type="text/css" href="search.css"></head>
<body><header>
            <div class="main">
    <ul>
<li><a href="adminhome.php">Home</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header><br><br>
<font face="Bahnschrift Condensed">
<h2><center><font color="green">STAFF</font></center></h2>

<table >
<thead class="trs">
<tr >
<th>NAME</th>
<th>EMAIL</th>
<th>PHONE</th>
<th>DEPARTMENT</th>
<th>TEACHING EXPERIENCE</th>

<th colspan="2"> Action </th></tr></thead>
<tbody>
<?php while ($row=mysqli_fetch_array($result)) { ?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['dept']; ?></td>

<td><?php echo $row['experience']; ?></td>


<td>
<a class="edt_btn" name="edit" href="staffedit.php">EDIT</a>
<a class="del_btn" name="delete" href="staffdlt.php?del=<?php echo $row['sid']; ?>">DELETE</a></td></td>
</tr> <?php } ?>
</table>
</body>
</html