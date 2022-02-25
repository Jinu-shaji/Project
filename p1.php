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
	<center><h1>ADD PRESENTATION MARK(MINI PROJECT)</h1><br><br><br><br><br>
	<form name="form10" method="post" action="" style="background-image: url('blue.jpeg'); background-repeat: no-repeat;background-size: cover;width: 30%;height: 300px">
	<div class="input-group"><tr><td><font color="white"><br><br><br><br>
<label >Presentation:</label></td><td>
<select name="p1" required>
<option value="">
<option value="1st presen.">1st presen.
<option value="2nd persen.">2nd persen.
<option value="final persen">final persen
</select></td></tr>
</div><br><div class="input-group"><tr><td>
  
<label>GroupNumber:</label></td><td>
<input type="text" name="gno"   required></td></tr></div>
<div class="input-group">
  <br><label>Mark:</label></td><td>
<input type="text" name="mrk"   required></td></tr></div><br><br><br>
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

    $p1=$_POST['p1'];
    $gno=$_POST['gno'];
    $mrk=$_POST['mrk'];
    
    
  
$insert="insert into presentation1 (batch,p1,gno,mrk)values ('$batch','$p1','$gno','$mrk')";
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
