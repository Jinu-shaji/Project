<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
$select="select *from work where type like 'main'";
$selresult=mysqli_query($con,$select);
$rollno=$_SESSION['uid'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>works</title>
  <link rel="stylesheet" type="text/css" href="maincss.css">
  <link rel="stylesheet" type="text/css" href="view.css">
  
</head>
<body style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">
  <header>
    <div class="main">
  <ul>
<li><a href="studenthome.php">HOME</a></li>

<li><a href="">CHANGE PASSWORD</a>
</li>
<li><a href="home.html">LOGOUT!</a>

</li>
</ul></div>
    <div class="title">
      <h3>PROJECT PIVOT </h3></div></header>
  <center><h1>UPLOAD WORKS</h1><br><br><br><br><br>
  <table >
<thead  >
<tr >
<th>WORK</th>
<th>FILE</th>

</thead>
<tbody>
<?php while ($row=mysqli_fetch_array($selresult)) { ?>
<tr>
<td><?php 
$instr=$row['instruction'];
echo $instr;
$s1="select id from work where instruction='$instr'";
$si1=mysqli_query($con,$s1);
while ($row=mysqli_fetch_array($si1)) {
  $id=$row['id'];
}


 ?></td>
<td><form method="POST" action="" ><input type="file" name="file">
<button type="submit" name="save" class="btn" >ADD</button>

</form></td>


</tr> <?php } ?>
</table>
</div>

</body>

</html>

<?php

$con=mysqli_connect('localhost','root','','project');
 
if (isset($_POST['save'])) {
    $file=$_POST['file'];
    
    
    
  
$insert="insert into upworkmain (id,rollno,file)values ('$id','$rollno','$file')";
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
