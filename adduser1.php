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
<li><a href="home.html">Home</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header><br><br>
<font face="Bahnschrift Condensed">

<center><h2><b>ADD ADVISOR</b></h2></center>
<form name="form2" method="post" action="" class="f2" >


<div class="input-group"><table  width=90%>
        <tr><td>
<label>BATCH:</label></td><td>
<input type="text" name="batch"  placeholder="enter RIT mailid" required></td></tr>
</div>
<div class="input-group"><tr><td>
<label>EMAIL:</label></td><td>
<input type="email" name="email"  placeholder="enter RIT mailid" required></td></tr>
</div>
<div class="input-group"><tr><td>
<label>NAME:</label></td><td>
<input type="text" name="name"  placeholder="enter your name" required></td></tr>
</div>
<div class="input-group"><tr><td>
<label>PHONENO:</label></td><td>
<input type="number" name="phno"  placeholder="enter your phone number" required></td></tr>
</div>






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
$batch=$_POST['batch'];
$email=$_POST['email'];
$name=$_POST['name'];
$phno=$_POST['phno'];



$insert="insert into addadv values ('$batch','$name','$email','$phno')";
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




