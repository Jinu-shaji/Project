<?php
$con=mysqli_connect('localhost','root','','project');


    $sname=$_POST['sname'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $rollno=$_POST['rollno'];
    $ktuid=$_POST['ktuid'];
    
  
$insert="insert into register (sname,email,phno,rollno,ktuid)values ('$sname','$email','$phno','$rollno','$ktuid')";
$ins=mysqli_query($con,$insert);
if($ins)  
   {  
      echo'<script>alert("Successfully added")</script>';  
      header("location:studentadd.php");  
   }  
else  
   {  
      echo'<script>alert("failed!!")</script>';  
      header("location:studentadd.php");
   }


  
?>
