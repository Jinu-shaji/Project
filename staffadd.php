<!DOCTYPE html>
    <head>
        
        <title>Users</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
        <link rel="stylesheet" type="text/css" href="form.css">
    </head>
    <body style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">
<header>
            <div class="main">
    <ul>
<li><a href="adminhome.php">HOME</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
<font face="Bahnschrift Condensed">

<center><h2>ADD TEACHING STAFF</h2>
<form name="form5" method="post" action="" class="f2"  style="background-image: url('blue.jpeg'); background-repeat: no-repeat;background-size: cover">
<div class="input-group">
  <table  width=100%>
    <div class="input-group"><tr><td>
<label>StaffName:</label></td><td>
<input type="text" name="name"  required></div>

<div class="input-group"><tr><td>
<label>Email:</label></td><td>
<input type="email" name="email" required></div>
<div class="input-group"><tr><td>
<label>Mobile:</label></td><td>
<input name="phone"   required></div>
<div class="input-group"><tr><td>
<label>Department:</label></td><td>
<select name="dept" required>
<option value="">
<option value="mca">MCA
</select></td></tr>
</div>
<div class="input-group"><tr><td>
  
<label>JoiningDate:</label></td><td>
<input type="date" name="doj"   required></td></tr></div>
<div class="input-group">
  
    <tr><td>
<label>TeachingExprience:</label></td><td>
<textarea rows="5" cols="25" name="experience"  required></textarea></td></tr>
</div>


       
       <div class="input-group"><tr><td>
        <button type="submit" name="save" class="btn" >ADD</button>
</td><td>
<button type="reset" name="reset" class="btn" >RESET</button>

</td></tr></font>
</div>
</form> 

<?php

$con=mysqli_connect('localhost','root','','project');
 
if (isset($_POST['save'])) {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dept=$_POST['dept'];
    $doj=$_POST['doj'];
    $experience=$_POST['experience'];
  
$insert="insert into staff (name,email,phone,dept,doj,experience)values ('$name','$email','$phone','$dept','doj''$phone','$experience')";
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

