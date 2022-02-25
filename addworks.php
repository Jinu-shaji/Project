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
	<center><h1>ADD WORKS FOR STUDENTS</h1><br><br><br><br><br>
	<form name="form10" method="post" action="" style="background-image: url('blue.jpeg'); background-repeat: no-repeat;background-size: cover;width: 30%;height: 300px">
	<div class="input-group"><tr><td><font color="white">
<label >ProjectType:</label></td><td>
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
<textarea rows="5" cols="25" name="instruction"  required></textarea></td><br><br>
<td width="101" height="61">Valid Upto </td><?php
      $cdate=date("Y")."-".date("m")."-".date("d");
      ?>
            <td width="172"><input type="date" name="t2" min="<?php echo $cdate; ?>"></td></tr><br><br>

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
    $t2=$_POST['t2'];
    
    
  
$insert="insert into work (batch,type,instruction,t2)values ('$batch','$type','$instruction','$t2')";
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
