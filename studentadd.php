<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
$count=0;

?>
<!DOCTYPE html>
    <head>
        
        <title>Users</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="student.css">
    </head>
    <body style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">
<header>
            <div class="main">
    <ul>
<li><a href="advisorhome.php">HOME</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
<font face="Bahnschrift Condensed">




<div class="container">
<table style="background-color: silver; background-repeat: no-repeat;background-size: cover;opacity: 0.8;">
  <tr width="100%" height="50px" bgcolor="lightblue">
    <th >NAME</th>
    <th>EMAIL</th>
    <th>phno</th>
    <th>rollno</th>
    <th>ktuid</th>
    
  </tr>

<?php

$count=0;
$result=mysqli_query($con,"select * from register ");
while ($row=mysqli_fetch_array($result)){
$count++;
  echo '<tr>
    <td>'.$row['sname'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['phno'].'</td>
    <td>'.$row['rollno'].'</td>
    <td>'.$row['ktuid'].'</td>
  </tr>';
}

?>





  
</table>


<form name="form6" method="post" action="insert.php" class="f2" ><h2>ADD STUDENTS(
<?php 
echo  $_SESSION['batch'] ;
?>)</h2>
<div class="input-group"  >
  <table  width=100% style="background-image: url('blue.jpeg'); background-repeat: no-repeat;background-size: cover">
    <div class="input-group"><tr ><td >
<label>Name:</label></td><td>
<input type="text" name="sname"  required></div>

<div class="input-group"><tr><td>
<label>Email:</label></td><td>
<input type="email" name="email" required></div>
<div class="input-group"><tr><td>
<label>Mobile:</label></td><td>
<input name="phno"   required></div>
<div class="input-group"><tr><td>
<label>ktuid:</label></td><td>
<input type="text" name="ktuid"  required></div>

<div class="input-group"><tr><td>
<label>rollno:</label></td><td>
<input type="text" name="rollno" required></div>

       
       <div class="input-group"><tr><td>
        <button type="submit" name="save" class="btn" >ADD</button>
</td><td>
<button type="reset" name="reset" class="btn" >RESET</button>

</td></tr></font>
</div>
</form> </table>

<h1>STUDENTS(
<?php 
echo  $_SESSION['batch'] ;
?>)</h1>
<div class="table_count">
  <div><h2><?php echo $count; ?>students</h2></div>

</div>



</body>

</html>

