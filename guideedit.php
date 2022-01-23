 <?php 
 session_start();
    $con=mysqli_connect('localhost','root','','project');
    if(isset($_POST['edit'])){ 
    $gid = $_POST['gid'];
    
    $query = " select * from addguide where gid='".$gid."'";
    $result = mysqli_query($con,$query);




 while($row=mysqli_fetch_assoc($result))
    {
      
        $batch =$row['batch'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        
     }}
?>
<html>
<head>
    
</head>
<body>
    


<title>Div2</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
        <link rel="stylesheet" type="text/css" href="form.css">

</head>
<body>
<header>
            <div class="main">
    <ul>
<li><a href="guideview.php">Home</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
<font face="Bahnschrift Condensed">


<center><h2><b>UPDATE GUIDE</b></h2>

<form name="form1" method="post" action="" >
<div class="input-group"><table  width=50%>
        <tr><td>
<label>Batch:</label></td><td>
<input type="text" name="batch" value="<?php 
echo  $_SESSION['batch'] ;
?>" readonly>
</div>
<div class="input-group"><tr><td>
<label>Name:</label></td><td>
<input type="text" name="name" >
</div>
<div class="input-group"><tr><td>
<label>Email:</label></td><td>
<input type="email" name="email" >
</div>

<div class="input-group"><tr><td>
<label>Phone:</label></td><td>
<input type="number" name="phone"   >
</div>

<div class="input-group"><tr><td>
<button type="submit" name="update" class="btn">UPDATE</button></td></tr>
</div>

</table></form></center>
</body>
</html>
<?php
if(isset($_POST['update']))
{
$batch=$_POST['batch'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

 

        $query = "update addguide set  batch = '$batch',name = '$name', email='$email',phone='$phone'  where batch='$batch' ";
        $result = mysqli_query($con,$query);
        
if($result)  
   {  
      echo'<script>alert("Update Successfully")</script>'; 
        
   }  
else  
   {  
      echo'<script>alert("Failed To Update")</script>'; 

   } 
   header("Location:guideview.php"); 
            }
        
?>