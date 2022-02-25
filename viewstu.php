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
<link rel="stylesheet" type="text/css" href="view.css">
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


