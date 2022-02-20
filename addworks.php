<!DOCTYPE html>
<html>
<head>
	<title>works</title>
</head>
<body>
	<a href="advisorhome.php">HOME</a>
	<center><h1>ADD WORKS FOR STUDENTS</h1></center>
	<form name="form10" method="post" action="">
	<div class="input-group"><tr><td>
<label>ProjectType:</label></td><td>
<select name="type" required>
<option value="">
<option value="mini">mini
<option value="main">main
<option value="seminar">seminar
</select></td></tr>
</div><br>
<div class="input-group">
		<tr><td>
<label>AssignWork:</label></td><td>
<textarea rows="5" cols="25" name="instruction"  required></textarea></td></tr><br><br>

<div class="input-group"><tr><td>
        <button type="submit" name="save" class="btn" >ASSIGN</button>
</td><td></div></form>

</div>
</body>
</html>

<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
 $batch=$_SESSION["batch"];
if (isset($_POST['save'])) {

    $type=$_POST['type'];
    $instruction=$_POST['instruction'];
    
    
  
$insert="insert into work (batch,type,instruction)values ('$batch','$type','$instruction')";
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
