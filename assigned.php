<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
$select="select *from work where type like 'mini'";
$selresult=mysqli_query($con,$select);
?>

<!DOCTYPE html>
<html>
<head>
	<title>works</title>
  <link rel="stylesheet" type="text/css" href="maincss.css">
  <link rel="stylesheet" type="text/css" href="view.css">
  
</head>
<body style="background-image: url('cell.jpg'); background-repeat: no-repeat;background-size: cover">
  <header>
    <div class="main">
  <ul>
<li><a href="guidehome.php">HOME</a></li>

<li><a href="">CHANGE PASSWORD</a>
</li>
<li><a href="home.html">LOGOUT!</a>

</li>
</ul></div><form method="POST" action="" >
    <div class="title">
      <h3>PROJECT PIVOT </h3></div></header>
	<center><h1>WORKS</h1><br><br><br><br><br>
	<table >
<thead  >
<tr >
<th>WORK</th>
<th>DEADLINE</th>

</thead>
<tbody>
<?php while ($row=mysqli_fetch_array($selresult)) { ?>
<tr>
<td><?php 
$instr=$row['instruction'];
echo $instr;


 ?>
 <td><?php echo $row['t2']; ?></td>

</form></td>


</tr> <?php } ?>
</table>
</div>

</body>

</html>

