<?php

$con=mysqli_connect('localhost','root','','project');
if(!$con)
	
echo "not connected";
$result=mysqli_query($con,"select * from upwork ");
$result1=mysqli_query($con,"select * from work ");
?>
<html>
<head>
	

<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="view.css">
<link rel="stylesheet" type="text/css" href="search.css"></head>
<body style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover"><header>
            <div class="main">
    <ul>
<li><a href="guidehome.php">HOME</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header><br><br>
<font face="Bahnschrift Condensed">
<h2><center><font color="green">STAFF</font></center></h2>

<table style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">
<thead  >
<tr >
<th>Groupnumber</th>
<th>Worknumber</th>
<th>Work</th>
<th>file</th>
<th>Mark</th>


</tr></thead>
<tbody>
<?php while ($row=mysqli_fetch_array($result)) { ?>
<tr>
<td><?php 
$gno=$row['gno'];
echo $gno; ?></td>
<td>

	<?php 
$id=$row['id'];
	echo $id; 
?></td>


<td><?php echo $row['id']; ?></td>
<td><?php echo $row['file']; ?></td>
<td><form method="POST" action=""><input type="text" name="mark">
<button type="submit" name="save" class="btn" >ADD</button>
</form></td>


</td>
</tr> <?php } ?>
</table>
</body>
</html>

<?php

$con=mysqli_connect('localhost','root','','project');
if (isset($_POST['save'])) {
    $mark=$_POST['mark'];
    
    
  
$insert="update upwork set mark='$mark' where gno='$gno' && id='$id'";
$ins=mysqli_query($con,$insert);
if($ins)  
   {  
      echo'<script>alert("Successfully added")</script>';    
   }  
else  
   {  
      echo'<script>alert("failed!!")</script>';  
   }


  }
?>
