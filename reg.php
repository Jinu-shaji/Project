<html>
<head>
    
    
<title>Div</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<header>
    <header>
            <div class="main">
    <ul>
<li><a href="home.html">HOME</a></li><
<li><a href="login.php">LOGIN</a></li>
<li><a href="home.html">LOGOUT!</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header><br><br>
<font face="Bahnschrift Condensed">

<center><h2><b>STUDENT REGISTRATION</b></h2></center>
<form name="form2" method="post" action="" class="f2" >


<div class="input-group"><table  width=90%>
        <tr><td>
<label>EMAIL:</label></td><td>
<input type="email" name="email"  placeholder="Enter RIT mailid" required></td></tr>
</div>
<div class="input-group"><tr><td>
<label>KTU ID:</label></td><td>
<input type="text" name="ktuid"  placeholder="Enter KTU_Id" required></td></tr>
</div>
<div class="input-group"><tr><td>
<label>NAME:</label></td><td>
<input type="text" name="name"  placeholder="Enter your name" required></td></tr>
</div>
<div class="input-group"><tr><td>
<label>ROLLNO:</label></td><td>
<input type="text" name="rollno"  placeholder="Enter roll number" required></td></tr>
</div>
<div class="input-group"><tr><td>
<label>PHONENO:</label></td><td>
<input type="number" name="phno"  placeholder="Enter your phone number" required></td></tr>
</div>
<div class="input-group"><tr><td>
<label>PROJECT TYPE</label></td><td>
<select name="type"  required>
<option value="">
<option value="mini">Mini Project
<option value="main">Main Project
</select></td></tr></div>





<div class="input-group"><tr><td>
<button type="submit" name="save" class="btn" >Register</button></td></tr></font>
</div>
</form>
</body>

</html>



<?php
$con=mysqli_connect('localhost','root','','project');
if(!$con)
echo "not connected";
if (isset($_POST['save'])){
$email=$_POST['email'];
$ktuid=$_POST['ktuid'];
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$phno=$_POST['phno'];
$type=$_POST['type'];


$insert="insert into register values ('$email','$ktuid','$name','$rollno','$type','$phno')";
$ins=mysqli_query($con,$insert);
if($ins)  
   {  
      echo'<script>alert("Registered Successfully")</script>';    
   }  
else  
   {  
      echo'<script>alert("Registration failed!!")</script>';  
   }  
}
?>




