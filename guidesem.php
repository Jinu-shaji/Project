<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
if(!$con)
echo "not connected";
$select="select *from staff";
$selresult=mysqli_query($con,$select);
$options="";
while($row=mysqli_fetch_array($selresult))
{
$options=$options."<option>$row[1]</option>";
}
if (isset($_POST['save'])){
$batch=$_POST['batch'];

}
$result=mysqli_query($con,"select * from advisor ");

?>



<!DOCTYPE html>
    <head>
        <!--meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script-->
        <title>Users</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="form.css">

        

      
    </head>
    <body style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">
<header>
            <div class="main">
    <ul>
<li><a href="advisorhome.php">HOME</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
<font face="Bahnschrift Condensed">

<center><h2>GROUP STUDENTS(<?php 
echo  $_SESSION['batch'] ;
?>)</h2>

<h3>ALLOT GUIDE(SEMINAR)</h3>
<form name="form40" method="post" action="" class="f2"width=100% style="background-image: url('blue.jpeg'); background-repeat: no-repeat;background-size: cover" ><h2>
<div class="input-group"><center>
  <table  width=100% style="background-image: url('blue.jpeg'); background-repeat: no-repeat;background-size: cover">
<tr><td>
<input type="hidden" name="batch"  value="<?php echo  $_SESSION['batch'] ; ?>" readonly></td></div>
<div class="input-group">
  <table  width=100% >
<td><label>AllottGuide:</label>
  <div class="custom-select" style="width:200px;">
<select name="name"  required>
  <option ></option>
  <?php echo $options; ?></select>
 </center>
</td></tr><tr>
    <td>
Select Students:
  <br>
  <?php 
     $checkquery="select * from register";
     $queryrun=mysqli_query($con,$checkquery);
     if(mysqli_num_rows($queryrun)>0)
     {
      foreach($queryrun as $sname)
      {
        ?>
        <input type="checkbox" name="sname[]" value="<?= $sname['sname'];?>" /><?= $sname['sname']; ?><br>
        <?php
      }
     }
   ?>

<td>
</div>
     <div class="input-group"><tr><td>
    <button type="submit" name="save" class="btn" >ADD</button></td>
<td>
<button type="reset" name="reset" class="btn" >RESET</button>
</td></tr></font>
</div></h2></center>
</form> 


  
</table>






<?php
if (isset($_POST['save'])) {

    $batch=$_POST['batch'];
    $sname=$_POST['sname'];
    $name=$_POST['name'];
   for ($i=0; $i < sizeof($sname); $i++) { 

$s="select rollno from register where sname='" . $sname[$i] ."'";
$si=mysqli_query($con,$s);
while ($row=mysqli_fetch_array($si)) {
  $rollno[$i]=$row['rollno'];
  
}
  /*$cbox=$_POST['sname'];
  $chk="";
  foreach ($cbox as $chk1 ) {
    $chk.=$chk1.",";
  }
  $csql="insert into groupstu(batch,gno,name,guide)values('$batch','$gno','$chk','$name')";
  $runcsql=mysqli_query($con,$csql);*/
  $chekinsrt="insert into guidesem(batch,name,rollno,guide,type) values('$batch','" . $sname[$i] ."','" . $rollno[$i] ."','$name','seminar')";
      $chekinsrt_run=mysqli_query($con,$chekinsrt);
    }
    if($chekinsrt_run)  
   {  
      echo'<script>alert("Successfully added")</script>';    
   }  
else  
   {  
      echo'<script>alert("Failed!!")</script>';  
   }
  

}
?>

</body>

</html>




