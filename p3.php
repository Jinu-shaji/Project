<!DOCTYPE html>
<html>
<head>
	<title>works</title>
  <link rel="stylesheet" type="text/css" href="maincss.css">
  <script>
function abc()
{
i
if(document.form1.t2.value=="")
{
alert("Please select the validity Date");
return(false);
}
}

</script>
</head>
<body style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">
  <header>
    <div class="main">
  <ul>
<li><a href="advisorhome.php">HOME</a></li>

<li><a href="">CHANGE PASSWORD</a>
</li>
<li><a href="home.html">LOGOUT!</a>

</li>
</ul></div>
    <div class="title">
      <h3>PROJECT PIVOT </h3></div></header>
	<center><h1>ADD PRESENTATION MARK(SEMINAR)</h1><br><br><br><br><br>
	<form name="form10" method="post" action="" style="background-image: url('blue.jpeg'); background-repeat: no-repeat;background-size: cover;width: 30%;height: 300px">
	<div class="input-group"><tr><td><font color="white"><br><br><br><br>
<label >Presentation:</label></td><td>
<select name="p3" required>
<option value="">
<option value="1st presen.">1st presen.
<option value="2nd persen.">2nd persen.
<option value="final persen">final persen
</select></td></tr>
</div><br><div class="input-group"><tr><td>
  
<label>RollNo:</label></td><td>
<input type="text" name="rollno"   required></td></tr></div>
<div class="input-group">
  <br><label>Mark:</label></td><td>
<input type="text" name="mrk3"   required></td></tr></div><br><br><br>
<div class="input-group"><tr><td>
        <button type="submit" name="save" class="btn" >ADD</button>
</td><td></div>
</form>

</div>

</body>

</html>

<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
 $batch=$_SESSION["batch"];
if (isset($_POST['save'])) {

    $p3=$_POST['p3'];
    $rollno=$_POST['rollno'];
    $mrk3=$_POST['mrk3'];
    
    
  
$insert="insert into presentation3 (batch,p3,rollno,mrk3)values ('$batch','$p3','$rollno','$mrk3')";
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
