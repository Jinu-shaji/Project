
<html>
<head>
  

<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="view.css">
<link rel="stylesheet" type="text/css" href="search.css"></head>
<body>
<header>
            <div class="main">
    <ul>
      <li><a href="advview.php">Back</a></li>
<li><a href="adminhome.php">Home</a></li>
</ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header><br><br>
<font face="Bahnschrift Condensed">
  <h3><center><font color="red">Search result is....</center></font></h3>
<form method="POST" action="">
  <div class="input-group"><table ><tr align="left" >
  <input type="text" name="srch" placeholder="Search here.."class="btns">
    <input type="submit" name="search" value="search" class="btn" ></tr></table></div>
</form></body></html>

<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "project");
$output = '';
if(isset($_POST["search"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["srch"]);
 $query = "
  SELECT * FROM advisor 
  WHERE batch LIKE '%".$search."%'
  OR name LIKE '%".$search."%' 
  OR dept LIKE '%".$search."%' 
   
  
 ";
}
else
{
 $query = "
  SELECT * FROM advisor ORDER BY batch
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>batch</th>
     <th>name</th>
     <th>department</th>
     <th>Action</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["batch"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["dept"].'</td>
    <td>
<a class="del_btn" name="edit" href="advedit.php">EDIT</a></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
  echo'<script>alert("Data not found!!!!")</script>';
  
}

?>