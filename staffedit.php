 <?php 
 session_start();
    $con=mysqli_connect('localhost','root','','project');
    if(isset($_POST['edit'])){ 
    $id = $_POST['id'];
    
    $query = " select * from staff where id='".$id."'";
    $result = mysqli_query($con,$query);




 while($row=mysqli_fetch_assoc($result))
    {
      
        $name =$row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $dept = $row['dept'];
        $experience = $row['experience'];
        
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
<li><a href="advview.php">Home</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
<font face="Bahnschrift Condensed">


<center><h2><b>UPDATE STAFF</b></h2>

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
<label>Department:</label></td><td>
<input type="text" name="dept" >
</div>
<div class="input-group"><tr><td>
<label>phone:</label></td><td>
<input type="text" name="phone" >
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
$dept=$_POST['dept'];


 

        $query = "update advisor set  batch = '$batch',name = '$name', dept='$dept' where batch='$batch' ";
        $result = mysqli_query($con,$query);
        
if($result)  
   {  
      echo'<script>alert("Update Successfully")</script>'; 
        
   }  
else  
   {  
      echo'<script>alert("Failed To Update")</script>'; 

   } 
   header("Location:advview.php"); 
            }
        
?>