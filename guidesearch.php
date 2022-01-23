
<html>
<head>
  

<link rel="stylesheet" type="text/css" href="maincss.css">
<link rel="stylesheet" type="text/css" href="view.css">
<link rel="stylesheet" type="text/css" href="search.css"></head>
<body>
<header>
            <div class="main">
    <ul>
      <li><a href="guideview.php">Back</a></li>
<li><a href="advisorhome.php">Home</a></li>
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
  SELECT * FROM addguide 
  WHERE  name LIKE '%".$search."%' 
  OR email LIKE '%".$search."%' 
  OR phone LIKE '%".$search."%' 
  
 ";
}
else
{
 $query = "
  SELECT * FROM addguide ORDER BY batch
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     
     <th>name</th>
     <th>email</th>
     <th>phone</th>
     <th>Action</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    
    <td>'.$row["name"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["phone"].'</td>
    <td>
<a class="del_btn" name="edit" href="guideedit.php">EDIT</a></td>
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