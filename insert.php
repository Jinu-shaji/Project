<?php
session_start();
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

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
$password=password_generate(7);

$batch=$_SESSION["batch"];
  $log="insert into login (uid,password,role,batch)values('$rollno','$password','student','$batch')";
$exelog=mysqli_query($con,$log);
  
?>
