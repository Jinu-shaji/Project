<?php

$con=mysqli_connect('localhost','root','','project');
if(!$con)
echo "not connected";

$result=mysqli_query($con,"select * from work ");
?>
<html>
<head>
	

<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="view.css">
<link rel="stylesheet" type="text/css" href="search.css"></head>
<body><header>
            <div class="main">
    <ul>
<li><a href="advisorhome.php">HOME</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header><br><br>
<font face="Bahnschrift Condensed">
<h2><center><font color="green">UPLOAD WORK</font></center></h2>

<table >
<thead class="trs">

<?php while ($row=mysqli_fetch_array($result)) { ?>
<?php echo $row['instruction']; ?> <?php } ?>
<br><br><br>

<form method="post" name ="form11">
	<input type="file" name="file">

	 <button type="submit" name="save" class="btn" >ADD</button>
</form>
<?php
if (isset($_POST['save'])) {

    $file=$_POST['file'];

  
$insert="update work set file='$file' where instruction='$instruction'";
$ins=mysqli_query($con,$insert);
if($ins)  
   {  
      echo'<script>alert("Successfully updated")</script>';    
   }  
else  
   {  
      echo'<script>alert("failed!!")</script>';  
   }


  }
?>

</table>
</body>
</html