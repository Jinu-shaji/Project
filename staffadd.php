<!DOCTYPE html>
    <head>
        
        <title>Users</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
        <link rel="stylesheet" type="text/css" href="form.css">
    </head>
    <body>
<header>
            <div class="main">
    <ul>
<li><a href="adminhome.php">Home</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
<font face="Bahnschrift Condensed">

<center><h2>ADD STAFF</h2>
<form name="form5" method="post" action="" class="f2" >
<div class="input-group">
  <table  width=100%>
    <div class="input-group"><tr><td>
<label>StaffId:</label></td><td>
<input type="text" name="sid"id="sid" ></div>
<tr><td>

<label>StaffName:</label></td><td>
<input type="text" name="name"  required></div>

<div class="input-group"><tr><td>
<label>Email:</label></td><td>
<input type="email" name="email" required></div>
<div class="input-group"><tr><td>
<label>PhoneNo:</label></td><td>
<input name="phone"   required></div>


       
       <div class="input-group"><tr><td>
<button type="reset" name="reset" class="btn" >RESET</button>
</td><td>
<button type="submit" name="save" class="btn" >ADD</button>
</td></tr></font>
</div>
</form> 

<?php

$con=mysqli_connect('localhost','root','','project');
 
if (isset($_POST['save'])) {
$sid=$_POST['sid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
  
$insert="insert into staff (sid,name,email,phone)values ('$sid','$name','$email','$phone')";
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






</body>

</html>

